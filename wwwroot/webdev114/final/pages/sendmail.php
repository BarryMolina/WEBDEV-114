<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Timothy O'Donnell is a multi-talented artist who works with the Milwaukee Ballet to produce Choreography, Photography, and almost everything related to dance in general.">
<meta name="keywords" content="Dance, Art, Choreography, Photography, Director, Photo editing, Film Director, Artist, Milwuakee Ballet, dance teacher">
<title>Timothy O'Donnell - Dancer, Choreographer, Photographer, Director</title>
<link rel="stylesheet" href="../styles/main.css">
<link rel="stylesheet" href="../styles/home.css">
<link rel="shortcut icon" href="../images/favicon.ico">
</head>
<body>
    <header>
        <h2>Timothy O&apos;Donnell</h2>
    </header>
    <nav id="nav_menu">
        <ul>
            <li><a href="dance.html">Dance</a></li>
            <li><a href="choreography.html">Choreography</a></li>
            <li><a href="photography.html">Photography</a></li>
                <ul>
                    <li><a href="photography/gallery.html">Gallery</a></li>
                    <li><a href="photography/editing.html">Editing Process</a></li>
                </ul>
            <li><a href="film.html">Film</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <main>
        <h1>Email Confirmation</h1>
        <form>
            <label for="first_name last_name">Name:</label>
            <input type="text" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>" disabled>
            <input type="text" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>" disabled><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>" disabled><br>
            <label for="todays_date">Today's Date:</label>
            <input type="date" name="todays_date" id="today_date" value="<?php echo $_REQUEST['todays_date'] ?>" disabled><br>
            <label for="subject">Subject:</label>         
            <input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'] ?>" disabled><br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="10" disabled><?php echo $_REQUEST['message'] ?></textarea><br>
            <h2>
            <?php
            if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email
            
            //set admin email for email to be sent to (use you own matc email address)
                $admin_email = "bazzaboy@gmail.com"; 

            //set php variable equal to information completed on the html form
                $email = $_REQUEST['email']; //request email that user typed on html form
                $phone = $_REQUEST['phone']; //request phone that user typed on html form
                $todays_date = $_REQUEST['todays_date']; //Request subject that user typed on HTML form
                $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
                $message = $_REQUEST['message']; //Request message that user typed on HTML form
            //Combine first name and last name, adding a space in between
                $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
                        
            //Start building the email body combining multiple values from HTML form    
                $body  = "From: " . $name . "\n"; 
                $body .= "Email: " . $email . "\n"; //Continue the email body
                $body .= "Phone: " . $phone . "\n"; //Continue the email body
                $body .= "Date: " . $todays_date . "\n"; //Continue the email body
                $body .= "Message: " . $message; //Continue the email body
            
            //Create the email headers for the from and CC fields of the email     
                $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
                $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor
                
            //Actually send the email from the web server using the PHP mail function
            mail($admin_email, $subject, $body, $headers); 
            mail($email, $subject, $body, $headers); 
                
            //Display email confirmation response on the screen
            echo "Thank you for contacting Tim!"; 
            }
            
            //if "email" variable is not filled out, display an error
            else  { 
                echo "There has been an error!";
                    }
            ?>
            </h2>
        </form>
    </main>
</body>
</html>
