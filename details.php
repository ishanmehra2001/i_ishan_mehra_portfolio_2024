<html>

<?php
// Creates a connection to the database
require_once('includes/connect.php'); 

$query = 'SELECT * FROM `project-info`, projects WHERE project_id = projects.id AND projects.id ='.$_GET['id'];

// Run query to get back the content
$results = mysqli_query($connect, $query);
?>

<head>
<link href="css/grid.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">


</head>

<body>

<?php
while($row = mysqli_fetch_array($results)) {

    echo '<section id="details-intro">
          <div class="image-con"><img src="' . $row['image'] . '"></div>
          <div class="text-con"><h1>' . $row['title'] . '</h1>' . $row['description'] . '</div>
          </section>';

            // Video Section: Only show the video player if 'video' is not null
    if ($row['video'] != null && $row['video'] != '') {
      echo '<div class="details-video">
            <div class="cinefolio">video</div>
            <video controls preload="metadata" src="' . $row['video'] . '" ></video>
            </div>';
  }

    // Start of the Gallery
    echo '<section id="details-gallery">
          <div class="details-gallery">
          <h2>Gallery</h2>
          <img src="' . $row['photo1'] . '" alt="Gallery Image 1">
          <img src="' . $row['photo2'] . '" alt="Gallery Image 2">
          <img src="' . $row['photo3'] . '" alt="Gallery Image 3">
          <img src="' . $row['photo4'] . '" alt="Gallery Image 4">
          </div>
          </section>';

  

    // Website Section: Only show the "Visit Website" button if 'website' is not null
    if ($row['website'] != null && $row['website'] != '') {
        echo '<div class="visit-website"><a href="' . $row['website'] . '"><button>VISIT THE WEBSITE!</button></a></div>';
    }

    // Case Study Section
    echo '<section id="case-study">
          <h1>Case Study</h1>
          <div><h2>PROBLEM STATEMENT</h2><p>' . $row['statement'] . '</p></div>
          <div><h2>RESEARCH</h2><p>' . $row['findings'] . '</p></div>
          <div><h2>SOLUTION</h2><p>' . $row['solution'] . '</p></div>
          <div class="case-study-tools">
          <div><h3>DURATION</h3><p>' . $row['duration'] . '</p></div>
          <div><h3>TOOLS USED</h3><p>' . $row['tools'] . '</p></div>
          </div>
          </section>';

}
?>

<script src="js/main.js"></script>

</body>
</html>


















































































<!--secured commented out content--> 


<!-- <section id="details-intro">
  <div class="image-con"><img src="images/earbuds/banner-earbud.png"></div>
  
  <div class="text-con">
    <h1>EARBUDS</h1>
    
    In level two, our class had an assignment by professor john to design earbuds, and then framing out advertising posters along with rendering a video commercial. The agenda was to familiarize us with the 3d software and modelling. 
    We learnt about setting up lights, camera angles, setting keyframes, rendering out the videos and photos. 
    The experience was really good, however, new things always come up with tricky problems and push us to get over them.</div>
</section>

<section id="details-gallery">
 <div class="details-video">
  <div class="cinefolio">video</div>
  <video controls preload="metadata" src="videos/commercial-earbud.mp4" >
  </div>
  <div class="details-gallery">
   <img src="images/earbuds/earbud2.png" alt="Gallery Image 1">
   <img src="images/earbuds/POSTER-1.jpg" alt="Gallery Image 2">
   <img src="images/earbuds/POSTER-2.jpg" alt="Gallery Image 3">
   <img src="images/earbuds/POSTER-3.jpg" alt="Gallery Image 4">
   
</div>
</section>

<section id="case-study">
 <h1>Case Study</h1>
 <div>
  <h2>PROBLEM STATEMENT</h2>
  <p>As i was not familiar with the 3d software and 3d modelling, i came across many challenges even after getting lessons from professor . Common problems like centralizing the axis of 3d elements and then setting up camera arose but could be solved after asking prof. However, modelling 3d shapes as per design was the most difficult part as it requires hands on experience and knowledge of all the  tools of the specific software. After that, setting up keyframes to make the desired animation was another problem as i could not make the camera movement and product (earbud) movement smooth and slow. So, these wee the main problems that i faced in the very beginning </p>
 </div>

 <div>
  <h2>RESEARCH</h2>
  <p>As i was not familiar with the 3d software and 3d modelling, i came across many challenges even after getting lessons from professor . Common problems like centralizing the axis of 3d elements and then setting up camera arose but could be solved after asking prof. However, modelling 3d shapes as per design was the most difficult part as it requires hands on experience and knowledge of all the  tools of the specific software. After that, setting up keyframes to make the desired animation was another problem as i could not make the camera movement and product (earbud) movement smooth and slow. So, these wee the main problems that i faced in the very beginning </p>
 </div>

 <div>
  <h2>SOLUTION</h2>
  <p>As i was not familiar with the 3d software and 3d modelling, i came across many challenges even after getting lessons from professor . Common problems like centralizing the axis of 3d elements and then setting up camera arose but could be solved after asking prof. However, modelling 3d shapes as per design was the most difficult part as it requires hands on experience and knowledge of all the  tools of the specific software. After that, setting up keyframes to make the desired animation was another problem as i could not make the camera movement and product (earbud) movement smooth and slow. So, these wee the main problems that i faced in the very beginning </p>
 </div>


 <div class="case-study-tools">
  <div>
   <h3>DURATION</h3>
   <p>2 months</p>
  </div>

  <div>
   <h3>TOOLS USED</h3>
   <p>Photoshop, Cinema 4d, after effects</p>
  </div>
 </div>

</section>
























<html>

<?php
//Creates a connection to the database. This code is 'included' into another file, as if it is pasted into the other file.

require_once('includes/connect.php'); //normally used required_once



// $query ='SELECT * FROM projects, project-info WHERE project_id = project-info.id AND projects.id ='.$_GET['id']; 


$query ='SELECT * FROM `project-info`, projects WHERE project_id = projects.id AND projects.id ='.$_GET['id'];





//run query to get back the content
$results = mysqli_query($connect,$query);



?>


<head>
<link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
   

<style>


</style>



</head>
<body>

<?php
while($row = mysqli_fetch_array($results)){

echo'<section id="details-intro">
  <div class="image-con"><img src="'
  
  
  .$row['image'].
  
  '"></div><div class="text-con"><h1>'
    
  .$row['title'].
    
  '</h1>'
  
  .$row['description'].
    
   '</div>
</section>

<section id="details-gallery">
 <div class="details-video">
  <div class="cinefolio">video</div>
  <video controls preload="metadata" src="'
  
  .$row['video'].
  
  '" >
  </div>
  <div class="details-gallery">
  <h2>Gallery</h2>
   <img src="'
   
   .$row['photo1'].
   
   '" alt="Gallery Image 1">
   <img src="'
   
   .$row['photo2'].
   
   '" alt="Gallery Image 2">
   <img src="'
   
   .$row['photo3'].
   
   '" alt="Gallery Image 3">
   <img src="'
   
   .$row['photo4'].
   
   '" alt="Gallery Image 4">
   
</div>
</section>

<div class="visit-website"><a href ="'

.$row['website'].'

"><button>VISIT THE WEBSITE!</button></a></div>
<section id="case-study">
 <h1>Case Study</h1>
 <div>
  <h2>PROBLEM STATEMENT</h2>
  <p>'
  
  .$row['statement'].
  
  
  '</p>
 </div>

 <div>
  <h2>RESEARCH</h2>
  <p>'
  
  .$row['findings'].
  
  '</p>
 </div>

 <div>
  <h2>SOLUTION</h2>
  <p>'
  
  .$row['solution'].
  
  '</p>
 </div>


 <div class="case-study-tools">
  <div>
   <h3>DURATION</h3>
   <p>'
   
   .$row['duration'].
   
   '</p>
  </div>

  <div>
   <h3>TOOLS USED</h3>
   <p>'
   
   .$row['tools'].
   
   '</p>
  </div>
 </div>

</section>

<script src="js/main.js"></script>';
}

?>

</body>
</html>

 -->















 