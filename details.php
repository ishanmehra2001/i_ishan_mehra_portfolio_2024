<html>

<?php
//Creates a connection to the database. This code is 'included' into another file, as if it is pasted into the other file.

require_once('includes/connect.php'); //normally used required_once


$query ='SELECT * FROM project-info, projects 



//run query to get back the content
$results = mysqli_query($connect,$query);
$row = mysqli_fetch_assoc($results);

?>


<head>
<script src="https://cdn.tailwindcss.com"></script>

<style>


</style>


</head>
<body>

<section>
  <h1>
<?php
echo $row['title'];  
?>
</h1>
</section>


<div>
  <?php 
  echo'<p>';
  echo $row['description'];
  echo'<p>';
  ?>
</div>

<div>
  <?php 
  echo'<p>';
  echo $row['statement'];
  echo'<p>';
  ?>
</div>

<div>
  <?php 
  echo'<p>';
  echo $row['findings'];
  echo'<p>';
  ?>
</div>



<div>
  <?php 
  echo'<p>';
  echo $row['solution'];
  echo'<p>';
  ?>
</div>



</body>
</html>
