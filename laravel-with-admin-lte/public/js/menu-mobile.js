/*
 JAVASCRIPT FILE
 Web Component: Responsive Navigation Menu
 wc_responsiveNavMenu_v1.js

 Author: Jacob Scott
 Created: 10-26-15
 Updated: 11-06-15
 */

/***** PAREMETERS *****/
var SWICH_MENUS_BREAKPOINT = 1024;
var HB_MENU_BREAKPOINT_100PCT = 720;
var HEADER_FADE_TIME = 200;
var TABBED_MENU_OUTER_PADDING = 64;
var TABBED_MENU_STICKY_THRESHOLD = 192; // Should be equal to page header height
var BASE_URL = window.location.origin;
var MENU_CONTENT = '<ul>' +
    '<li><a href=" ' + BASE_URL + '/ ">หน้าแรก</a></li>' +
    '<li><a href=" ' + BASE_URL + '/about-us">วินเนอร์</a></li>' +
    '<li><a href=" ' + BASE_URL + '/promotion">โปรโมชั่น</a></li>' +
    '<li><a href=" ' + BASE_URL + '/products">ผลิตภัณฑ์</a></li>' +
    '<li><a href=" ' + BASE_URL + '/events">กิจกรรม</a></li>' +
    '<li><a href=" ' + BASE_URL + '/services">บริการ</a></li>' +
    '<li><a href=" ' + BASE_URL + '/references">ผลงาน</a></li>' +
    '<li><a href=" ' + BASE_URL + '/contact-us">ติดต่อสอบถาม</a></li>' +
    '</ul>';


// Event handling
$(document).ready(function() {
    // Insert Menu Content
    insertMenuContent();

    // Add submenu toggle buttons to .hb-menu
    setSubToggleButtons();

    // Add .hide-selection class to all element within .hb-menu or .tabbed-menu
    $('.hb-menu').addClass('hide-selection');
    $('.hb-menu').find('*').addClass('hide-selection');
    $('.tabbed-menu').addClass('hide-selection');
    $('.tabbed-menu').find('*').addClass('hide-selection');

    // Set top offset value for tabbed menu sub menus.
    topValue = $('.tabbed-menu').height();
    $('.tabbed-menu > nav > ul > li > ul').css('top',topValue + 'px');

    // Set left value for logo
    $('.tabbed-menu > * > img').css('left',TABBED_MENU_OUTER_PADDING + 'px');

    // Hide header if screen width is less than SWAP_MENUS_BREAKPOINT.
    if ($(window).innerWidth() < SWICH_MENUS_BREAKPOINT) {
        // Hide display of header
        $('header').css('display','none');
    }

    // Add .menuScrollSpacer
    var tabbedMenuHeight = $('.tabbed-menu').height();
    $('.tabbed-menu').after('<div class="menuScrollSpacer" style="display: none; width: 100%;"></div>');
    $('div.menuScrollSpacer').css('height',tabbedMenuHeight + 'px');

    // Add toggle control for submenus
    $('.hb-menu > #main-nav > ul > li').on('click', '> div', function() {
        // Toggle subMenuToggle icon rotation
        $(this).find('i').toggleClass('hb-menu-sub-open');

        // Toggle submenu open class
        $(this).parent().find('ul').toggleClass('hb-menu-sub-open');
    });

    // Choose menu type based on window width
    swapMenus();

    // Set width of .hb-menu
    setMenuWidth();

    // Offset tabbed menu to right-align
    tabbedMenuOffsetX();
});

$(window).resize(function() {
    // Choose menu type based on window width
    swapMenus();

    // Set width of .hb-menu
    setMenuWidth();

    // Offset tabbed menu to right-align
    tabbedMenuOffsetX();
});

$(window).scroll(function(){
    // Sticky Tabbed menu functionality
    stickyNavBar();
});

/***** FUNCTIONS *****/

// FUNCTION: swapMenus
/* Toggles menu style when window size changes at 480px width breakpoint */
function swapMenus() {
    if ($(window).innerWidth() > SWICH_MENUS_BREAKPOINT) {

        // Remove .hb-menu;
        $('.hb-menu').css('display','none');
        $('.hb-menu-btn').css('display','none');
        $('.hb-menu').removeClass('hb-menu-open');
        $('.hb-menu-btn').removeClass('hb-menu-open');
        $('.page').removeClass('hb-menu-page','hb-menu-open');

        // Add .tabbed-menu
        $('.tabbed-menu').css('display','block');

        // Show header
        $('.header').show(HEADER_FADE_TIME);

    }

    else {

        // Add .hb-menu;
        $('.hb-menu').css('display','block');
        $('.hb-menu-btn').css('display','block');
        $('.page').addClass('hb-menu-page');
        $('.page').removeClass('hb-menu-open');

        // Remove .tabbed-menu
        $('.tabbed-menu').css('display','none');

        // Hide header
        $('.header').css('display','none');
        $('.header').hide(0);

    }
}

// FUNCTION: setSubToggleButtons()
/* Inserts toggle button for sub menus on hamburger menu */
function setSubToggleButtons() {
    // Add sub-menu toggle button
    $('.hb-menu > nav > ul > li > a.withSubmenu').after('<div class="hb-menu-subMenuToggle hide-selection" id=toggle><i class="fa fa-fw fa-plus" style="color: white;"></i></div>');
}

// FUNCTION: insertMenuContent
/* Inserts global menu content into menus of either style */
function insertMenuContent() {
    // Insert MENU_CONTENT into #main-nav element
    $('.hb-menu > #main-nav').html(MENU_CONTENT);

    $('.tabbed-menu > #main-nav').html(MENU_CONTENT);
}

// FUNCTION: setMenuWidth()
/* Change width of .hb-menu values according to media queries. */
function setMenuWidth() {
    var setWidth;
    var windowWidth = $(window).innerWidth();

    setWidth = '50%';

    if (windowWidth < HB_MENU_BREAKPOINT_100PCT) {
        setWidth = '100%';
    }

    // .hb-menu
    $('.hb-menu').css('width', setWidth);
    $('.hb-menu .push-left').css('left', setWidth);
    $('.hb-menu .push-right').css('left', setWidth);
    $('.hb-menu .hb-menu-open .push-left').css('left', setWidth);
    $('.hb-menu .hb-menu-open .push-right').css('transform', 'translatex(' + setWidth + ')');
}

// FUNCTION: hbMenuToggle()
/* Toggles CSS classes for animation of .hb-menu-button, .hb-menu, and .page */
function hbMenuToggle() {
    var menuWidth = $('.hb-menu').width();

    getClass = $('.hb-menu-btn').hasClass('hb-menu-open');
    if (getClass == 1) {
        $('.hb-menu-btn').removeClass('hb-menu-open');
        $('.hb-menu').removeClass('hb-menu-open');
        $('.hb-menu-page').removeClass('hb-menu-open');
        $('body').css({'overflow-y': 'auto'});
    }
    else {
        $('.hb-menu-btn').addClass('hb-menu-open');
        $('.hb-menu').addClass('hb-menu-open');
        $('.hb-menu-page').addClass('hb-menu-open');
        $('body').css({'overflow-y': 'hidden'});
    }
};

// FUNCTION: stickyNavBar()
/* Allows tabbed menu to stick to top of window after scroll threshold is reached. */
function stickyNavBar() {
    // Offset from top
    offsetY = TABBED_MENU_STICKY_THRESHOLD;

    if ($('body').scrollTop() > offsetY) {
        // Add .active class for sticky menu.
        $('.sticky').css('position','fixed');

        // Display spacer block;
        $('div.menuScrollSpacer').css('display','block');
    }
    else {
        $('.sticky').css('position','relative');
        $('div.menuScrollSpacer').css('display','none');
    }
}

// FUNCTION: tabbedMenuOffsetX()
/* Right-align tabbed menu items. */
function tabbedMenuOffsetX() {
    var winW, navW, offsetX, padding;

    // Get Values
    winW = $(window).innerWidth();
    navW = $('.tabbed-menu > nav > ul').width();

    // Calculate Offset
    offsetX = winW - navW - TABBED_MENU_OUTER_PADDING;

    // Set offset
    $('.tabbed-menu > nav > ul').css('left',offsetX + 'px');
}
