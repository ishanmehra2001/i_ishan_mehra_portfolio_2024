
//mobile menu
(() => {
  const hamburger = document.getElementById("hamburger");

  function toggleMobileMenu() {
    console.log("Toggling mobile menu");
    const mobileMenu = document.getElementById("mobile-menu");
    mobileMenu.classList.toggle("active");
  }
  
  hamburger.addEventListener("click", toggleMobileMenu);
   
})();




//typing animation of services
(() => {
  const textElement = document.querySelector('.services p');
const texts = ['Motion Designer', 'Web Developer', 'Graphic Designer', 'Video Editor'];
let index = 0;

setInterval(() => {
  textElement.classList.add('fade-out');
  setTimeout(() => {
    textElement.textContent = texts[index];
    textElement.classList.remove('fade-out');
    textElement.classList.add('fade-in');
    setTimeout(() => {
      textElement.classList.remove('fade-in');
    }, 500);
  }, 500);
  index = (index + 1) % texts.length;
}, 1700);

})();


// //video playeer
// (() => {
//   const player = new Plyr('video');
//   Video.controls = false;
//   })();




// (() => {

//   gsap.registerPlugin(ScrollTrigger);


//   gsap.to("#projects-header h1", 0.6,
//       {
//           scrollTrigger: {
//               trigger:"#projects-page", 
//               toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
//               markers: false, 
//               start: "-8% 50%", //animation box starts, scroller start
//               end: "-6.5% 50%", //animation box ends, scroller end
//           },
//           opacity: 1,
//       }
//   )
//   gsap.to("#projects-header p", 0.6,
//     {
//         scrollTrigger: {
//             trigger:"#projects-page", 
//             toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
//             markers: false, 
//             start: "-4% 50%", //animation box starts, scroller start
//             end: "-3.5% 50%", //animation box ends, scroller end
//         },
//         opacity: 1,
//     }
// )

// gsap.to(".project-1-img", 0.6,
//   {
//       scrollTrigger: {
//           trigger:"#projects-page", 
//           toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
//           markers: false, 
//           start: "5% 50%", //animation box starts, scroller start
//           end: "6% 50%", //animation box ends, scroller end
//       },
//       opacity: 1,
//   }
// )
  
// })();





//MOON
// Handles loading the events for <model-viewer>'s slotted progress bar
const onProgress = (event) => {
  const progressBar = event.target.querySelector('.progress-bar');
  const updatingBar = event.target.querySelector('.update-bar');
  updatingBar.style.width = `${event.detail.totalProgress * 100}%`;
  if (event.detail.totalProgress === 1) {
    progressBar.classList.add('hide');
    event.target.removeEventListener('progress', onProgress);
  } else {
    progressBar.classList.remove('hide');
  }
};
document.querySelector('model-viewer').addEventListener('progress', onProgress);










