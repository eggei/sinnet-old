/*!
 * jQuery Smooth Scroll Plugin v1.4.5
 *
 * Date: Sun Mar 11 18:17:42 2012 EDT
 * Requires: jQuery v1.3+
 *
 * Copyright 2012, Karl Swedberg
 * Dual licensed under the MIT and GPL licenses (just like jQuery):
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 *
 *
 *
*/

(function($) {

const version = '1.4.4';
    const defaults = {
      exclude: [],
      excludeWithin:[],
      offset: 0,
      direction: 'top', // one of 'top' or 'left'
      scrollElement: null, // jQuery set of elements you wish to scroll (for $.smoothScroll).
                          //  if null (default), $('html, body').firstScrollable() is used.
      scrollTarget: null, // only use if you want to override default behavior
      beforeScroll() {},  // fn(opts) function to be called before scrolling occurs. "this" is the element(s) being scrolled
      afterScroll() {},   // fn(opts) function to be called after scrolling occurs. "this" is the triggering element
      easing: 'swing',
      speed: 400,
      autoCoefficent: 2 // coefficient for "auto" speed
    };

    const getScrollable = function(opts) {
      let scrollable = [];
          let scrolled = false;
          const dir = opts.dir && opts.dir == 'left' ? 'scrollLeft' : 'scrollTop';

      this.each(function() {

        if (this == document || this == window) { return; }
        const el = $(this);
        if ( el[dir]() > 0 ) {
          scrollable.push(this);
          return;
        }

        el[dir](1);
        scrolled  = el[dir]() > 0;
        el[dir](0);
        if ( scrolled ) {
          scrollable.push(this);
          
        }

      });

      if ( opts.el === 'first' && scrollable.length ) {
        scrollable = [ scrollable.shift() ];
      }

      return scrollable;
    };
    const isTouch = 'ontouchend' in document;

$.fn.extend({
  scrollable(dir) {
    const scrl = getScrollable.call(this, {dir});
    return this.pushStack(scrl);
  },
  firstScrollable(dir) {
    const scrl = getScrollable.call(this, {el: 'first', dir});
    return this.pushStack(scrl);
  },

  smoothScroll(options) {
    options = options || {};
    const opts = $.extend({}, $.fn.smoothScroll.defaults, options);
        const locationPath = $.smoothScroll.filterPath(location.pathname);

    this.die('click.smoothscroll').live('click.smoothscroll', function(event) {

      const clickOpts = {}; const link = this; const $link = $(this);
          const hostMatch = ((location.hostname === link.hostname) || !link.hostname);
          const pathMatch = opts.scrollTarget || ( $.smoothScroll.filterPath(link.pathname) || locationPath ) === locationPath;
          const thisHash = escapeSelector(link.hash);
          let include = true;

      if ( !opts.scrollTarget && (!hostMatch || !pathMatch || !thisHash) ) {
        include = false;
      } else {
        const {exclude} = opts; let elCounter = 0; const el = exclude.length;
        while (include && elCounter < el) {
          if ($link.is(escapeSelector(exclude[elCounter++]))) {
            include = false;
          }
        }

        const {excludeWithin} = opts; let ewlCounter = 0; const ewl = excludeWithin.length;
        while ( include && ewlCounter < ewl ) {
          if ($link.closest(excludeWithin[ewlCounter++]).length) {
            include = false;
          }
        }
      }

      if ( include ) {
        event.preventDefault();

        $.extend( clickOpts, opts, {
          scrollTarget: opts.scrollTarget || thisHash,
          link
        });

        $.smoothScroll( clickOpts );
      }
    });

    return this;

  }
});

$.smoothScroll = function(options, px) {
  let opts; let $scroller; let scrollTargetOffset; let speed;
      let scrollerOffset = 0;
      let offPos = 'offset';
      let scrollDir = 'scrollTop';
      const aniprops = {};
      let useScrollTo = false;
      let scrollprops = [];

  if ( typeof options === 'number') {
    opts = $.fn.smoothScroll.defaults;
    scrollTargetOffset = options;
  } else {
    opts = $.extend({}, $.fn.smoothScroll.defaults, options || {});
    if (opts.scrollElement) {
      offPos = 'position';
      if (opts.scrollElement.css('position') == 'static') {
        opts.scrollElement.css('position', 'relative');
      }
    }

    scrollTargetOffset = px ||
                        ( $(opts.scrollTarget)[offPos]() &&
                        $(opts.scrollTarget)[offPos]()[opts.direction] ) ||
                        0;
  }
  opts = $.extend({link: null}, opts);
  scrollDir = opts.direction == 'left' ? 'scrollLeft' : scrollDir;

  if ( opts.scrollElement ) {
    $scroller = opts.scrollElement;
    scrollerOffset = $scroller[scrollDir]();
  } else {
    $scroller = $('html, body').firstScrollable();
    useScrollTo = isTouch && 'scrollTo' in window;
  }

  aniprops[scrollDir] = scrollTargetOffset + scrollerOffset + opts.offset;

  opts.beforeScroll.call($scroller, opts);

  if ( useScrollTo ) {
    scrollprops = (opts.direction == 'left') ? [aniprops[scrollDir], 0] : [0, aniprops[scrollDir]];
    window.scrollTo.apply(window, scrollprops);
    opts.afterScroll.call(opts.link, opts);

  } else {
    speed = opts.speed;

    // automatically calculate the speed of the scroll based on distance / coefficient
    if (speed === 'auto') {
      // if aniprops[scrollDir] == 0 then we'll use scrollTop() value instead
      speed = aniprops[scrollDir] || $scroller.scrollTop();
      // divide the speed by the coefficient
      speed /= opts.autoCoefficent;
    }

    $scroller.animate(aniprops,
    {
      duration: speed,
      easing: opts.easing,
      complete() {
        opts.afterScroll.call(opts.link, opts);
      }
    });
  }

};

$.smoothScroll.version = version;
$.smoothScroll.filterPath = function(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
};

// default options
$.fn.smoothScroll.defaults = defaults;

function escapeSelector (str) {
  return str.replace(/(:|\.)/g,'\\$1');
}

})(jQuery);
