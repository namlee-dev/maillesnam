const menu = {

    init: function(){
        // console.log('init loaded');
        menu.stickyMenu();

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
}

document.addEventListener("DOMContentLoaded", menu.init);