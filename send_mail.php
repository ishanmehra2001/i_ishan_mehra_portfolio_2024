
<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
require_once('includes/connect.php');

// Initialize variables to avoid undefined index warnings
$fname = $email = $msg = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Gather the form content safely
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $msg = isset($_POST['message']) ? $_POST['message'] : '';

    $errors = [];

    // Validate and clean these values
    $fname = trim($fname);
    $email = trim($email);
    $msg = trim($msg);

    if (empty($fname)) {
        $errors['fname'] = 'name has to be filled out';
    }

    if (empty($msg)) {
        $errors['message'] = 'You must provide a message';
    }

    if (empty($email)) {
        $errors['email'] = 'You must provide an email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['legit_email'] = 'You must provide a REAL email';
    }

    if (empty($errors)) {
        // Insert these values as a new row in the contact table
        $query = "INSERT INTO contact (fname, email, message) VALUES ('$fname', '$email', '$msg')";

        if (mysqli_query($connect, $query)) {
            // Format and send these values in an email
            $to = 'mehraishan2001@gmail.com';
            $subject = 'Message from your Portfolio site!';
            $message = "You have received a new contact form submission:\n\n";
            $message .= "Name: ".$fname."\n";
            $message .= "Email: ".$email."\n\n";
            $message .= $msg;
            
            // Send the email
            mail($to, $subject, $message);

            // Redirect to thank you page

            header('Location: thankyou.php');

        } else {
            echo "Error: " . mysqli_error($connect);  // Display SQL error if the query fails
        }
    } else {
        // Output any validation errors
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
} else {
    // If the form is not submitted, provide feedback
    echo "Please fill out the form to contact us.";
}
?>















 <?php
// // connect to database
// require_once('includes/connect.php');


// //gather data from form
// $fname = $_POST['first_name'];
// $lname = $_POST['last_name'];
// $email  = $_POST['email'];
// $message = $_POST['message'];



// //check form items for errors
// $fname = trim($fname);
// $lname = trim($lname);
// $email = trim($email);  
// $message = trim($message);



// //insert new row in the contacts table
// $query = "INSERT INTO contact (id, fname, lname, email, company, message, attachment) VALUES (NULL, '".$fname."', '".$lname."', '".$email."', '".$company."', '".$message."', '".$attachment."')";

// mysqli_query($connect, $query);

// header("Location: contact.php");

// //format an email and email it to myself

?>