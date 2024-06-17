<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formTitle = $_POST["form_name"]; // Retrieve the form name from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $Enquiry = $_POST["Enquiry"];


    // Configure email settings and send the email.
    $to = "nikhilrathore8866@gmail.com";
    $subject = "Contact Form Submission - $formTitle from $formTitle";
    $headers = "From: $email";
    
    // Create an HTML table for the email content.
    $emailContent = '<html><body>';
    $emailContent .= "<h2>Signature Global 93$formTitle</h2>";
    $emailContent .= "<table width='400'>
        <tr>
            <td width='31'>&nbsp;</td>
            <td width='122'>Name</td>
            <td width='239'>$name</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Email</td>
            <td>$email</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Mobile</td>
            <td rowspan='2'>$phone</td>
        </tr>
         <tr>
            <td>&nbsp;</td>
            <td>Enquiry</td>
            <td rowspan='2'>$Enquiry</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>";
    
    // Set the Content-Type header for HTML content.
    $headers .= "MIME-Version: signature global 93\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Send the email.
    mail($to, $subject, $emailContent, $headers);

    // Redirect to a thank-you page or show a confirmation message.
    header("Location: index.html");
}

?>
