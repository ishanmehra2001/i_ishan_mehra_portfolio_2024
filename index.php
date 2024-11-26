<html>

<?php
require_once('includes/connect.php'); 


$query ='SELECT projects.id,description,title FROM projects';


$results = mysqli_query($connect,$query);
?>


<head>
<script src="https://cdn.tailwindcss.com"></script>

<style>

body{
    background-color: black;
    padding-bottom: 320px;
}
#projects-page{
  
  width: 100vw;
  padding-top: 0px;
  
  
}

#projects-header{
  display: flex;
  flex-direction: column;
}

#projects-header img{
  margin-left: -10px;
}


#projects-header h1{
  font-size: 30px;
  margin-top: 20px;
  margin-left: 10px;
  -webkit-text-stroke: 1px #ffffff; 
  -webkit-text-fill-color: transparent;
  justify-content: center;
  display: flex;
}

#projects-header p{
  font-size: 20px;
  color: white;
  font-weight: bold;
  justify-content: center;
  display: flex;
}


/*project-1*/

#project-1 p{
  font-size: 14px;
  font-weight: normal;
  margin-left: 10px;
  margin-right: 10px;
  margin-top: 20px;
  color: white;
}

.project-1-img{
  height:254px;
  width: 400px;
  margin-left: 10px;
  margin-top: 80px;
  border: 2px solid white;
  border-radius: 20px;
  object-fit: cover;
  overflow: hidden;
}


.project-1-title{
  position: absolute;
  background-color: rgb(0, 0, 0);
  width: 150px;
  height: 30px;
  border-radius: 10px;
  margin-left: 120px;
  margin-top: -20px;
  color: white;
  font-size: 25px;
  text-align: center;
  font-weight: bold;
  -webkit-text-stroke: 0.4px #ffffff; 
  -webkit-text-fill-color: transparent; 
}

.project-1-text button{
  background-color: transparent;
  color: white;
  border: 2px solid white;
  font-size: 12px;
  border-radius: 20px;
  cursor: pointer;
  width: 140px;
  height: 25px;
  margin-left: 270px;
  margin-top: 20px;
}

.project-1-text button:hover{
  background-color: white;
  color: black;
  border-radius: 30px;
  box-shadow: 0px 0px 10px  #fff;
  transition: all .15s ease-in-out;
}




/*TABLET SCREEN*/
@media screen and (min-width: 768px) {
     /*projects page*/
  #projects-header h1{
    font-size: 50px;
    margin-top: 20px;
  }
  
  #projects-header p{
    font-size: 30px;
  }

  #projects-header img{
    margin-top: -190px;
  }

  /*project 1*/

  #project-1{
    display: flex;
    align-items: center;
    margin-top: 10px;
    margin-bottom: 10px;
    width: 100vw;
  }
    
  #project-1 p{
  font-size: 14px;
  font-weight: normal;
  margin-right: 40px;
  margin-top: 50px;
}

.project-1-img{
  width: 1730px;
  height: 230px;
 
}

.project-1-title{
left: -5px;
}

.project-1-text button{
  position: absolute;
  right: 50px;
}

}





/*DESKTOP SCREEN*/
@media screen and (min-width: 1200px) {
     /*projects page*/

  #projects-header img{
    height: 100px;
    margin-left: -10px;
    margin-top: 90px;
  }

  #projects-header h1{
    font-size: 60px;
    margin-top: 20px;
   
  }
  
  #projects-header p{
    font-size: 40px;
    
  }


  #project-1{
    display: flex;
    align-items: center;
    margin-top: 10px;
    margin-bottom: 10px;
    width: 100vw;
  }
    


#project-1 p{
  font-size: 16px;
  font-weight: normal;
  margin-right: 40px;
  margin-top: 50px;
}

.project-1-img{
  width: 1730px;
  height: 330px;
 
}

.project-1-title{
left: 45px;
}

.project-1-text button{
  position: absolute;
  right: 50px;
}
}




</style>

</head>

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

            '</div></div><div class="project-1-text col-span-full m-col-start-6 m-col-end-13">
          <p>'
          
          .$row['description'].
          
          '</p>
          <button href="details.php?id= '.$row['id'].'">Details</button>
          </div>
        </div>
    </section>';
    
  
}

?>


</body>
</html>


