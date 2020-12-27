const menu = {

    init: function(){
        // console.log('init loaded');

        menu.stickyMenu();

        // Select the menu button
        const menuButton = document.querySelector('.menu__header--button');
        // Listen the click
        menuButton.addEventListener('click', menu.handleMenuButtonClick);
    },

    stickyMenu: function(){
      // console.log('stickyMenu loaded');

      // When the user scrolls the page, execute sticky
      window.onscroll = function() {sticky()};

      // Get the menu
      const mainMenu = document.querySelector(".menu__header");

      // Get the offset position os the menu
      const stickyMenu = mainMenu.offsetTop;

      // Add the sticky class to the menu when you reach its scroll position
      // Remove the sticky class when you leave the scroll position
      function sticky() {
        if (window.pageYOffset >= stickyMenu) {
          mainMenu.classList.add("sticky")
        } else {
          mainMenu.classList.remove("sticky");
        }
      }
    },

    handleMenuButtonClick: function(event) {
      // console.log("handleMenuButtonClick loaded");

      // Add the "menu-visible" class to the <body>
      const body = document.querySelector('body');
      body.classList.add('menu-visible');

      // Create a <nav> copy in the <body>
      // --> Retrieve the menu
      const menuClone= document.querySelector('.menu__header .menu__main').cloneNode(true);
      menuClone.classList.add('copy');
      // --> Add it as child <body>
      body.appendChild(menuClone);

      // Select the cross
      const crossButton = document.querySelector('.copy .close-button');
      // Listen the click
      crossButton.addEventListener('click', menu.handleCloseButtonClick);
    },

    handleCloseButtonClick: function(event) {
      // Retrieve the <body>
      const body = document.querySelector('body');
      // Remove the "menu-visible" class of the <body>
      body.classList.remove('menu-visible');
      // Remove the <nav> that is the <body> child
      body.querySelector('body > .menu__main').remove();
  }
}

document.addEventListener("DOMContentLoaded", menu.init);