// (function() {
//   let element;
//   let windowHeight;
//
//   function init() {
//     webDesign = document.querySelector('.web-design');
//     mobileApps = document.querySelector('.socialmediaads');
//     windowHeight = window.innerHeight;
//   }
//
//   function checkPosition() {
//       let web_positionFromTop = webDesign.getBoundingClientRect().top;
//       let app_positionFromTop = mobileApps.getBoundingClientRect().top;
//       if (web_positionFromTop - windowHeight <= 0) {
//         webDesign.style.backgroundPosition = "-" + ((windowHeight - web_positionFromTop)/20) + "px 0px";
//       }
//       if (app_positionFromTop - windowHeight <= 0) {
//         mobileApps.style.backgroundPosition = ((windowHeight - app_positionFromTop)/20) - 500 + "px 0px";
//       }
//     }
//
//   window.addEventListener('scroll', checkPosition);
//   window.addEventListener('resize', init);
//
//   init();
//   checkPosition();
// })();
