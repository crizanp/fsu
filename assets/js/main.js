// slider

var map;
$(document).ready(function () {
  $('.flexslider').flexslider({
    animation: "fade"
  });

  $('#news-carousel').carousel({ interval: false });
  $('#videos-carousel').carousel({ interval: false });
  $('#testimonials-carousel').carousel({ interval: 6000, pause: "hover" });
  $('#awards-carousel').carousel({ interval: false });

  $('#flickr-photos').jflickrfeed({
    limit: 12,
    qstrings: {
      id: '138784770@N07'
    },
    itemTemplate:
      '<li>' +
      '<a href="{{image}}" title="{{title}}" target="_blank">' +
      '<img src="{{image_s}}" alt="{{title}}" />' +
      '</a>' +
      '</li>'
  });

  $('li.dropdown-submenu > a.trigger').on('click', function (e) {
    var current = $(this).next();
    current.toggle();
    e.stopPropagation();
    e.preventDefault();
    if (current.is(':visible')) {
      $(this).closest('li.dropdown-submenu').siblings().find('ul.dropdown-menu').hide();
    }
  });

  $('.card-toggle').on('click', function () {
    if ($(this).find('svg').attr('data-icon') == 'plus-square') {
      $(this).find('svg').attr('data-icon', 'minus-square');
    } else {
      $(this).find('svg').attr('data-icon', 'plus-square');
    };
  });



});


//image popup of routine section

$(document).ready(function () {
  var imgPopup = $('.img-popup');
  var imgCont = $('.container__img-holder');
  var popupImage = $('.img-popup img');
  var closeBtn = $('.close-btn');

  // handle events
  imgCont.on('click', function () {
    var img_src = $(this).children('img').attr('src');
    imgPopup.children('img').attr('src', img_src);
    imgPopup.addClass('opened');
  });

  $(imgPopup, closeBtn).on('click', function () {
    imgPopup.removeClass('opened');
    imgPopup.children('img').attr('src', '');
  });

  popupImage.on('click', function (e) {
    e.stopPropagation();
  });

});

// Change tab 

$(document).on('click', function (e) {
  var
    $popover,
    $target = $(e.target);
  //do nothing if there was a click on popover content
  if ($target.hasClass('popover') || $target.closest('.popover').length) {
    return;
  }
  $('[data-toggle="popover"]').each(function () {
    $popover = $(this);
    if (!$popover.is(e.target) &&
      $popover.has(e.target).length === 0 &&
      $('.popover').has(e.target).length === 0) {
      $popover.popover('hide');
    } else {
      //fixes issue described above
      $popover.popover('toggle');
    }
  });
})
var tabNav = $('.tab-nav'),
  tabContent = $('.tab-content');

// Reorder Tabs
var addOrder = function (item) {
  var itemNum = 1;
  item.each(function () {
    $(this).css('order', itemNum);
    return itemNum++;
  });
};

// Change Tab
var changeTab = function (tabs) {
  tabs.on('click', '.tab-nav', function () {
    var el = $(this),
      elId = el.attr('href');

    tabs.find('.tab-nav').removeClass('active');
    tabs.find('.tab-content').removeClass('active');

    el.addClass('active');
    $(elId).addClass('active');
  });
};
changeTab($('#thisTab'));

// Check Page Width
var checkWidth = function () {
  if ($(window).width() < 767) {
    addOrder(tabNav);
    addOrder(tabContent);
  } else {
    tabNav.css('order', '');
    tabNav.css('order', '');
  }
};

$(window).on('resize', function () {
  checkWidth();
});
$(document).ready(function () {

  // Variables
  var clickedTab = $(".tabs > .active");
  var tabWrapper = $(".tab__content");
  var activeTab = tabWrapper.find(".active");
  var activeTabHeight = activeTab.outerHeight();

  // Show tab on page load
  activeTab.show();

  // Set height of wrapper on page load
  tabWrapper.height(activeTabHeight);

  $(".tabs > li").on("click", function () {

    // Remove class from active tab
    $(".tabs > li").removeClass("active");

    // Add class active to clicked tab
    $(this).addClass("active");

    // Update clickedTab variable
    clickedTab = $(".tabs .active");

    // fade out active tab
    activeTab.fadeOut(250, function () {

      // Remove active class all tabs
      $(".tab__content > li").removeClass("active");

      // Get index of clicked tab
      var clickedTabIndex = clickedTab.index();

      // Add class active to corresponding tab
      $(".tab__content > li").eq(clickedTabIndex).addClass("active");

      // update new active tab
      activeTab = $(".tab__content > .active");

      // Update variable
      activeTabHeight = activeTab.outerHeight();

      // Animate height of wrapper to new tab height
      tabWrapper.stop().delay(50).animate({
        height: activeTabHeight
      }, 500, function () {

        // Fade in active tab
        activeTab.delay(50).fadeIn(250);

      });
    });
  });

  // Variables
  var colorButton = $(".colors li");

  colorButton.on("click", function () {

    // Remove class from currently active button
    $(".colors > li").removeClass("active-color");

    // Add class active to clicked button
    $(this).addClass("active-color");

    // Get background color of clicked
    var newColor = $(this).attr("data-color");

    // Change background of everything with class .bg-color
    $(".bg-color").css("background-color", newColor);

    // Change color of everything with class .text-color
    $(".text-color").css("color", newColor);
  });
});

