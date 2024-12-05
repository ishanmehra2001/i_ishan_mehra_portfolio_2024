
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



(() => {
  const player = new Plyr('.player');
  })();





(() => {

  gsap.registerPlugin(ScrollTrigger);


  gsap.from("#projects-page", 0.6,
      {
          scrollTrigger: {
              trigger:"#projects-page", 
              toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
              markers: false, 
              start: "-12% 50%", //animation box starts, scroller start
              end: "-12% 50%", //animation box ends, scroller end
          },
          opacity: 0,
          y:50,
         
      }
  )

  gsap.from("#projects-header h1", 0.6,
    {
        scrollTrigger: {
            trigger:"#projects-page", 
            toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
            markers: false, 
            start: "-10% 50%", //animation box starts, scroller start
            end: "-10% 50%", //animation box ends, scroller end
        },
        opacity: 0,
        y:50,
       
    }
)
gsap.from(".subtitle", 0.6,
  {
      scrollTrigger: {
          trigger:"#projects-page", 
          toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
          markers: false, 
          start: "-9.5% 50%", //animation box starts, scroller start
          end: "-9.5% 50%", //animation box ends, scroller end
      },
      opacity: 0,
      y:50,
     
  }
)





  gsap.from("#accomplishments h3", 0.6,
    {
        scrollTrigger: {
            trigger:"#accomplishments h3", 
            toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
            markers: false, 
            start: "-280% 50%", //animation box starts, scroller start
            end: "-280% 50%", //animation box ends, scroller end
        },
        opacity: 0,
        y:50,
       
    }
)

gsap.from("#accomplishments p", 0.6,
  {
      scrollTrigger: {
          trigger:"#accomplishments h3", 
          toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
          markers: false, 
          start: "-210% 50%", //animation box starts, scroller start
          end: "-210% 50%", //animation box ends, scroller end
      },
      opacity: 0,
      y:50,
     
  }
)

gsap.from(".achieve-container", 0.6,
  {
      scrollTrigger: {
          trigger:".achieve-container", 
          toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
          markers: false, 
          start: "-90% 50%", //animation box starts, scroller start
          end: "-90% 50%", //animation box ends, scroller end
      },
      opacity: 0,
      y:50,
     
  }
)



gsap.from("#testimonials h3", 0.6,
  {
      scrollTrigger: {
          trigger:"#testimonials", 
          toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
          markers: true, 
          start: "-3% 50%", //animation box starts, scroller start
          end: "-3% 50%", //animation box ends, scroller end
      },
      opacity: 0,
      y:50,
     
  }
)

gsap.from(".testi-p", 0.6,
  {
      scrollTrigger: {
          trigger:"#testimonials", 
          toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
          markers: true, 
          start: "1% 50%", //animation box starts, scroller start
          end: "1% 50%", //animation box ends, scroller end
      },
      opacity: 0,
      y:50,
     
  }
)

gsap.from(".testi-profile", 0.6,
  {
      scrollTrigger: {
          trigger:"#testimonials", 
          toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
          markers: true, 
          start: "5% 50%", //animation box starts, scroller start
          end: "5% 50%", //animation box ends, scroller end
      },
      opacity: 0,
      y:50,
     
  }
)
gsap.from(".feedback", 0.6,
  {
      scrollTrigger: {
          trigger:"#testimonials", 
          toggleActions: "play none reverse none",//onEnter, onLeave, onEnterBack, onLeaveBack.
          markers: true, 
          start: "5% 50%", //animation box starts, scroller start
          end: "5% 50%", //animation box ends, scroller end
      },
      opacity: 0,
      y:50,
     
  }
)

})();




(() => {
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

})();







(() => {
  const audio = document.getElementById('background-music');
  const toggleButton = document.getElementById('toggle-music');

  // Function to toggle play/pause on the audio
  toggleButton.addEventListener('click', () => {
    if (audio.paused) {
      audio.play(); // Play the audio if it's paused
    } else {
      audio.pause(); // Pause the audio if it's playing
    }
  });
})();