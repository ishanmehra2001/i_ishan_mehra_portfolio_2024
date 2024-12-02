

<html>
<head>
<link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>


<body>
<section id="contact-section">
    <img class="contact-bck-img" src="images/contact-bck.png">
<div class="bckgrnd-container">
<h1 class="contact-title">CONTACT</h1>
<form method="post" action="send_mail.php">
    
<label for="fname">First Name: </label>
    <input type="text" name="fname" id="fname"> 

<br><br>

    <label for="lname">Last Name: </label>
    <input type="text" name="lname" id="lname">


    <br><br>

    <label for="email">Email: </label>
    <input type="text" name="email" id="email">

    <br><br>

    <label for="message">message: </label>
    <textarea name="message" id="message">comment here</textarea>

    <br><br>


    <input id="send" type="submit" value="send">
</form>
</div>
</section>


</body>
</html>



