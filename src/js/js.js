import $ from "jquery";

// initialise Stellar.js
$("body").stellar({
  verticalScrolling: true,
  horizontalScrolling: false,
});

// Cache some variables
const links = $(".navigation, #hamMenu").find("li");
const slide = $(".slide");
const button = $(".button");
const mywindow = $(window);
const htmlbody = $("html,body");

// Setup waypoints plugin
slide.waypoint((event, direction) => {
  // cache the variable of the data-slide attribute associated with each slide
  const dataslide = $(this).attr("data-slide");
  const navLiSelector = `.navigation li[data-slide="${dataslide}"]`;
  const hamMenuLiSelector = `#hamMenu li[data-slide="${dataslide}"]`;

  // If the user scrolls up change the navigation link that has the same data-slide attribute as the slide to active and
  // remove the active class from the previous navigation link
  if (direction === "down") {
    $(`${navLiSelector}, ${hamMenuLiSelector}`)
      .addClass("active")
      .prev()
      .removeClass("active");
  }
  // else If the user scrolls down change the navigation link that has the same data-slide attribute as the slide to active and
  // remove the active class from the next navigation link
  else {
    $(`${navLiSelector}, ${hamMenuLiSelector}`)
      .addClass("active")
      .next()
      .removeClass("active");
  }
});

// waypoints doesnt detect the first slide when user scrolls back up to the top so we add this little bit of code, that removes the class
// from navigation link slide 2 and adds it to navigation link slide 1.
mywindow.scroll(() => {
  if (mywindow.scrollTop() === 0) {
    $('.navigation li[data-slide="1"]').addClass("active");
    $('.navigation li[data-slide="2"]').removeClass("active");

    $('#hamMenu li[data-slide="1"]').addClass("active");
    $('#hamMenu li[data-slide="2"]').removeClass("active");
  }
});

// Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
// easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
function goToByScroll(dataslide) {
  const position = $(`.slide[data-slide="${dataslide}"]`).offset().top;
  // Three animate functions are used here because to "hack-fix" an issue.
  // Issue: When user clicks on one of the links in the navigation, the page scrolls to the top of the content
  // which causes waypoint to not be able to understand that user actually jumped to the next content
  // If the last two animate functions were removed from here, navigation links will be highlighted wrong
  // when navigating by clicking on the links.
  htmlbody.animate(
    {
      scrollTop: position - 2,
    },
    2000,
    "easeInOutQuint"
  );
  htmlbody.animate({ scrollTop: position + 2 });
  htmlbody.animate({ scrollTop: position });
}

// When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
links.click((e) => {
  e.preventDefault();
  const dataslide = $(this).attr("data-slide");
  goToByScroll(dataslide);
  // close the hamburger menu
  $("#hamMenuToggle input").prop("checked", false);
});

// When the user clicks on the button, get the get the data-slide attribute value of the button and pass that variable to the goToByScroll function
button.click((e) => {
  e.preventDefault();
  const dataslide = $(this).attr("data-slide");
  goToByScroll(dataslide);
});
