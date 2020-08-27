<?php
	//Purpose of file: To send an email to myself with the message, time, date, and sender of the submission of the "contact me" form
    // Security check
    if(!isset($_POST["name"]))
    {
        die('<meta http-equiv="refresh" content="0; url=https://www.sebastianllerena.com/" />');
        exit();
    }
    else
    {
        // Get form values
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = "Message for Sebastianllerena.com: '" . $_POST['subject'] . "'";
        date('m/d/Y h:i:s a', time());
        $dateSent = date('Y-m-d H:i:s');
        $message = $_POST["message"] . "\n\nSend via SebastianLlerena.com\nSender Name: '$name'\nEmail of Sender: $email\nTimestamp: $dateSent";
    
        // Email info
        $email_to = "myemail@email.com";
        $email_header = "From: emailSender@lakedeep.org\r\n";
    
        // Backup new email on emails database
        require 'dbh.inc.php';
        $websiteOfMessage = "SebastianLlerena";
        $sql= "INSERT INTO emails(website, name, email, subject, message, date)
            VALUES (?,?,?,?,?,?)";
            // emails DB also has 'id' but since that auto-increments, it's not in the parameters above ^
        $stmt = mysqli_stmt_init($conn);
        if(mysqli_stmt_prepare($stmt,$sql))
        {
            mysqli_stmt_bind_param($stmt,"ssssss", $websiteOfMessage, $name, $email, $subject, $message, $dateSent);
            mysqli_stmt_execute($stmt);
        }
    
        // Send email
        if (mail($email_to, $subject, $message, $email_header))
            die('<meta http-equiv="refresh" content="0; url=https://www.sebastianllerena.com/thank-you" />');
        else
            echo "Error: Mail function failed.";
        exit();
    }
?>