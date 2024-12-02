<html>

<?php
require_once('includes/connect.php'); 


//  $query ='SELECT projects.id AS project, description,title FROM projects, `project-info` WHERE projects.id = project_id';

$query ='SELECT `project-info`.id AS project ,projects.id,description,title, image FROM projects, `project-info` WHERE project_id = projects.id';

//  $query ='SELECT projects.id As project,description,title, image FROM projects, `project-info` WHERE project_id = projects.id';

// $query ='SELECT projects.id,description,title FROM projects,project-info WHERE project_id = project-info.id';

// $query ='SELECT project-info.id, description, title, image FROM projects, project-info WHERE project_id = project-info.id';

// $query ='SELECT project-info.id, projects.id,description,title FROM projects ';


$results = mysqli_query($connect,$query);
?>


<head>
<link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<style>

  body{
    margin-bottom: 70px;
  }
  p{
    color: white;
  }

  button{
  background-color: transparent;
  color: white;
  border: 2px solid white;
  font-size: 10px;
  border-radius: 20px;
  padding: 7px 15px;
  cursor: pointer;
}

button:hover{
  background-color: white;
  color: black;
  border: 2px solid white;
  box-shadow: 0 0 15px white;
  
}
</style>

<body>
<header></header>

<section id="projects-page">
    <div id="projects-header" class="grid-con">
        
        <img src="images/divider.svg" alt="divider-img">
        <div>
          <h1 class="col-span-full">TRANSFORM VISION</h1>
          <p class="col-span-full">INTO REALITY</p>
        </div>
<!--put section inside php tag in order to make it making more like this-->
<?php
while($row = mysqli_fetch_array($results)){



    echo'<div id="project-1"      
         class="grid-con">
          <div class="project-1-img col-span-full m-col-start-1 m-col-end-5">
            <div class="project-1-title">'

            .$row['title'].

            '</div>
            <img src="'.$row['image'].'" alt="project-1-img">
            </div><div class="project-1-text col-span-full m-col-start-6 m-col-end-13">
          <p>'
          
          .$row['description'].
          
          '</p>
          <a href="details.php?id='.$row['project'].'"><button>Details</button></a>
          </div>
        </div>
    </section>';
    
  
}

?>


</body>
</html>


