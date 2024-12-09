<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css"/>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    
    <title>Ishan Mehra's Portfolio</title>
</head>
<body>
 


  <!-- Landing Page -->
   <section id="landing-page">
    <video autoplay loop muted >
      <source src="videos/background.mp4" type="video/mp4">
    </video>
    <header>
      <div class="header-mobile grid-con"> 

        <img id="logo" class=" col-start-1 col-end-2  " src="images/logo.svg" alt="logo " >
        
        <div  id="speaker" class=" col-start-3 col-end-5 m-col-start-9 m-col-end-13 l-col-start-10 l-col-end-14">
      

        
        <audio id="background-music"  autoplay loop>
          <source src="videos/music-bck.mp3" type="audio/mp3">
        </audio>  
<button id="toggle-music">
    <img src="images/speaker-icon.svg" alt="speaker-img">
</button> 



        <a class="contact-btn" href="contact.php">Let's connect</a>
        <div class="hamburger" id="hamburger">
          <span class="menu-line"></span>
          <span class="menu-line"></span>
          <span class="menu-line"></span>
        </div>
      </div>
      <!--menu for mobile(hidden)-->
      <div class="mobile-menu" id="mobile-menu">
        <img class="logo-mob-menu" src="images/logo.svg" alt="logo">
        <nav>
          <ul>
            <li><a href="#about-page"><p>ABOUT</p></a></li>
            <li><a href="#projects-page"><p>PROJECTS</p></a></li>
            <li><a href="#logofolio"><p>LOGOFOLIO</p></a></li>
            <li><a href="images/ishan-resume.pdf" download="ishan-resume.pdf"><p>RESUME</p></a></li>
            
          </ul>
        </nav>
      
        <div id="astronaut"><img  class="astronaut-img" src="images/astronaut.png" alt="astronaut-img">
        </div>
     
      </div>

      <!-- menu for tablet and pc-->
      
       <menu  class="desk-menu grid-con m-col-span-full l-col-span-full"> 
        <li><a href="#"><p>HOME</p></a></li>
        <li><a href="#about-page"><p>ABOUT</p></a></li>
        <li><a href="#projects-page"><p>PROJECTS</p></a></li>
        <li><a href="images/ishan-resume.pdf" download="ishan-resume.pdf"><p>RESUME</p></a></li>

       </menu>
      

    </header>
    <div class="linking-icon grid-con"> 
      <div class="col-start-4 col-end-5  m-col-start-11 m-col-end-12 l-col-start-12 l-col-end-13">
      <Img src="images/linking-icon.svg" alt="linking-icon">
        
        <p>"Success is the result of hard work and determination, but true greatness is measured by the 
          kindness and empathy we show to others along the way."</p>
          <img class="chain" src="images/chain.png" alt="chain-img">
        </div>
    </div>
    <div class="hero-text">
      <p>Namaskaram from</p>
      <h1 class="hero-name">Ishan Mehra</h1>
      <p>a WEB-DEVELOPER and GRAPHIC DESIGNER</p>
     </div>

    <div class="grid-con">
    <img class="tauras col-start-1 col-end-4 m-col-start-5 m-col-end-11 l-col-start-5 l-col-end-13" alt="tauras" src="images/tauras.png">
    
    <!--<p class="tooltip-tauras">My constellation <br>Taurus</p>-->
    
     </div>
  
    
     <div id="linkedin" class="col-start-1 col-end-1">
     <a herf="https://www.linkedin.com/in/ishan-mehra-4a8230288/"><p>Linkedin</p> </a>
      <img src="images/linkedin-logo.svg" alt="linkedin-logo">
     
    </div>
  </section>



      <section id="about-page">
      <div class="about grid-con">
        
      
        <img id="my-photo" class="col-span-full m-col-start-1 m-col-end-6 " src="images/xd-profile3.svg" alt="my-photo">
        <!-- <img class="display-img" src="images/profile.png" alt="profile-img"> -->
       

        <div class="services col-start-4 col-end-5 m-col-start-6 m-col-end-12 ">
          <p>Motion Designer</p>
        </div>

        <div class="about-text col-span-full m-col-start-5  m-col-end-13 ">
            <p>Hi, I'm Ishan Mehra, a web developer with a background in Interactive Media Design from Fanshawe College in London. My studies equipped me with skills in front-end and back-end development, 3D modeling, video editing, and graphic design. With this diverse skill set, I create visually appealing and functional digital solutions that bring ideas to life. I'm passionate about blending design and technology to help businesses thrive online.</p>
            <h2><b>LONDON, ONTARIO</b>
            </h2>
            <a href="about_me.html"><button>Know more about me</button></a>
          </div>

          <!-- <div class="demo-reel col-span-full ">
            <div class="cinefolio">Cinefolio</div>
         <video controls preload="metadata" src="videos/demo-reel.mp4">
        </video>
        </div> -->
        <div class="demo-reel col-span-full ">
        <div class="cinefolio">Cinefolio</div>
        <video class="player" controls preload="metadata" poster="images/quatro-draw.png">
            <source src="videos/demo-reel.mp4" type="video/mp4">
        </video>
        </div>

      </div> 
      </section>

   <!--projects-->
      <section id="projects-page">
      <div id="projects-header" class="grid-con">
          
          <img src="images/divider.svg" alt="divider-img">
          <div>
            <h1 class="col-span-full">TRANSFORM VISION</h1>
            <p  class="subtitle col-span-full">INTO REALITY</p>
          </div>



          <!--project-1-->
          <div id="project-1"      
           class="grid-con">
            <div class="project-1-img col-span-full m-col-start-1 m-col-end-5">
              <div class="project-1-title">PROJECT 1</div>
              <a href="projects.php"><herf><img src="images/earbuds/earbud1.png">
          </div></a>

            <div class="project-1-text col-span-full m-col-start-6 m-col-end-13">
            <p>I created realistic 3D earbuds in Cinema 4D as part of an assignment focused on mastering 3D modeling techniques. The project involved not only designing the product but also creating promotional posters and advertisements to showcase the final design. This exercise helped me develop skills in both 3D design and visual communication for marketing purposes.</p>
            </div>
          </div>




           <!--project-2-->
           <div id="project-2"      
           class="grid-con">
            <div class="project-1-img col-span-full">
              <div class="project-1-title">PROJECT 2</div>
              <a href="projects.php"><img src="images/kavorka/kavorka-1.png"></a>
          </div>

            <div class="project-1-text col-span-full m-col-start-5 m-col-end-12">
            <p>For this assignment, I developed an entirely new skincare brand, Kavorka, from scratch. The project involved designing three 3D skincare products, along with creating promotional posters, advertisements, and a comprehensive style guide. This experience allowed me to explore the entire branding process, from product design to visual identity, honing my skills in 3D modeling, brand development, and marketing communication.</p>
           

            </div>
          </div>



        <!--project-3-->

        <div id="project-3"      
        class="grid-con">
         <div class="project-1-img col-span-full">
           <div class="project-1-title">PROJECT 3</div>
           <a href="projects.php"><img src="images/hackathon/Desktop_hackathon.png"></a>
       </div>

         <div class="project-1-text col-span-full m-col-start-5 m-col-end-12">
         <p>For our mid-term assignment, I collaborated with two teammates to design and develop a website for our school, intended to be used for an upcoming event. As a group, we handled all aspects of the project, from layout and user interface design to coding and functionality. This assignment provided valuable experience in web development and teamwork, allowing us to create a functional and visually appealing site tailored to the event’s needs.</p>
        

         </div>
       </div>
       </div>

       <a href="projects.php"><button class="all-projects-btn">See all projects</button></a>
      </section>


      <section id="accomplishments">
        <div class="grid-con">
          <span class="line-divider "></span>
          <h3 class=" m-col-start-5 m-col-end-13 l-col-start-5 l-col-end-13">Accomplishments</h3>
          <p class=" m-col-start-7 m-col-end-13 l-col-start-6 l-col-end-10">
            "Success is the sum of small efforts, repeated day in and day out." — Robert Collier</p>
            <div class="achieve-container">
            <div class="achieve">1. Interactive Media Design Course - Fanshawe College London, Ontario </div>
            <div class="achieve">2. Introduction To Design Thinking Course - Great Learning </div>
            <div class="achieve">3. UI/UX Design Course - Great Learning </div>
            <div class="achieve">4. Advertising Representative - INDIA  </div>
          </div>
        </div>
      </section>   


      <section id="logofolio">
        <img src="images/divider.svg" alt="divider-img">
        <div class="grid-con">
        <h3 class="m-col-start-3 m-col-end-10 l-col-start-4 l-col-end-13">LOGOFOLIO</h3>
        <p class="col-span-full m-col-start-3 m-col-end-13 l-col-start-4 l-col-end-10">
          “Your logo is the silent ambassador of your brand.” — Paul Rand</p>
        </div>
        <div class="logo-gallery">
          <div class="photo-stack move-left">
              <img src="images/logos/kavorka.png" alt="Logo 1">
              <img src="images/logos/quatro.png" alt="Logo 2">
              <img src="images/logos/resonate.png" alt="Logo 3">
              
              
              <!-- Add more photos -->
          </div>
      
          <div class="photo-stack move-right">
              
              <img src=" images/logos/ngo.png" alt="Logo 4 ">
              <img src="images/logos/mood.png" alt="Logo 5">
              <img src="images/logos/arka.png" alt="Logo 6">
              
              <!-- Add more photos -->
          </div>
      </div>
      </section>


      <section id="testimonials">
        <img src="images/divider.svg" alt="divider-img">
        <div class="grid-con">
          <h3 class="m-col-start-3 m-col-end-10 l-col-start-4 l-col-end-13">TESTIMONIALS</h3>
          <p class="testi-p col-span-full m-col-start-3 m-col-end-13 l-col-start-4 l-col-end-10">"Testimonials are the bridge between my work and future opportunities, 
            reflecting the trust and satisfaction of those I've helped along the way."</p>
          </div>
          <div class="testi-profile">
            <div class="profile-img">
              <!--image-->
            </div>
            
            <p>MS. RIYA MEHRA (developer)</p>
          </div>
          <div class="feedback col-start-2 col-end-5">
            <p>"I had the pleasure of collaborating with Ishan Mehra on several projects, and his coding skills are exceptional. He consistently write clean, efficient code and tackle complex challenges with ease. A natural problem solver and a quick learner,he is a valuable asset to any development team."</p>
          </div>


          <!--testi 2-->
          
            <div class="testi-profile">
              <div class="profile-img ">
                <!--image-->
              </div>
              <p>MR. JOSH LUIS (editor)</p>
            </div>
            <div class="feedback col-start-2 col-end-5">
              <p>"I was blown away by Ishan Mehra's video editing work. They brought creativity and precision to every project, delivering high-quality videos on time. His attention to detail and understanding of pacing, color grading, and transitions made a huge difference in the final product."</p>
            </div>

            <!--testi 3-->
          
            <div class="testi-profile">
              <div class="profile-img ">
                <!--image-->
              </div>
              <p>MR. RAHUL MEHRA (designer)</p>
            </div>
            <div class="feedback col-start-2 col-end-5">
              <p>"Working with Ishan Mehra on 3D motion design was a fantastic experience. He has an incredible ability to bring concepts to life with stunning visual effects and seamless animations.He combines technical expertise with artistic vision, resulting in truly impressive work."</p>
            </div>
      </section>
        
      
    
    <footer>
       <div class="footer grid-con">


       <model-viewer src="model/moon.gltf" ar ar-modes="webxr scene-viewer quick-look" camera-controls tone-mapping="neutral" poster="images/poster.webp" shadow-intensity="0.52" environment-image="model/studio_small_09_8k (2).hdr" exposure="1.36" shadow-softness="1" disable-zoom disable-panning auto-rotate rotation-per-second="6">
          <div class="progress-bar hide" slot="progress-bar">
              <div class="update-bar"></div>
          </div>
          
        </model-viewer> 


        <div>
          <img src="images/logo.svg" alt="logo">
          <p>Let's get connected and make something great...</p>
          <div class="say-hi">Say hi at</div>
          <a class="mail-link" href="mailto:mehraishan2001@gmail.com">mehraishan2001@gmail.com</a>
          <div class="copyright">© 2023. All rights reserved.</div>
        </div>
        <div>
          
          <div class="social-media">
            <a><img src="images/facebook.svg" alt="facebook"></a>
            <a href="https://www.instagram.com/ishan_mehra2001/"><img src="images/Instagram-Icon.svg" alt="instagram"></a>
            <a href="https://x.com/mehraishan2001"><img src="images/X-Icon.svg" alt="twitter"></a>
          </div>
        </div>

       </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script src="js/main.js"></script>
</body>
</html>






