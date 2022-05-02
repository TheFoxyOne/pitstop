
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail(){

    // GET FORM DATA
    $companyName = $_POST["companyName"];
    $onSale = $_POST["onSale"];
    $package = $_POST["package"];
    $power = $_POST["power"];
    $wifi = $_POST["wifi"];
    $traderSelectStop = $_POST["traderSelectStop"];

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contactNumber"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $postcode = $_POST["postcode"];
    $notes = $_POST["notes"];

    // Show the User the status message.
    $failedMessage= 'The email was not sent. Try again later.';
    $successMessage= "Thank you $firstName, your email was sent successfully!";

    // Create email body
    $name = "$firstName $lastName";
    $from = "$email";
    $subject = 'New Trader email!';
    
    // HTML body
    $body  = "This email was sent from Pit Stop Trader Contact Form. <br><br>";
    $body .= "Form Details: <br><br>";
    $body .= "First Name: $firstName <br>";
    $body .= "Last Name: $lastName <br>";
    $body .= "Email: $email <br>";
    $body .= "Contact Number: $contactNumber <br>";
    $body .= "Address 1: $address1 <br>";
    $body .= "Address 2: $address2 <br>";
    $body .= "City: $city <br>";
    $body .= "Postcode: $postcode <br>";
    $body .= "Additional Notes: $notes <br>";
    $body .= "Company Name: $companyName <br>";
    $body .= "Products/Services on sale: $onSale <br>";
    $body .= "Package: $package <br>";
    $body .= "Need power?: $power <br>";
    $body .= "Need Wifi?: $wifi <br>";
    $body .= "Selected Package: $traderSelectStop <br><br>";
    $body .= "Sincerely, <br>";
    $body .= "Pit Stop Team";

    // Plain text body (for mail clients that cannot read HTML)
    $text_body  = "This email was sent from Pit Stop Trader Contact Form. \n\n";
    $text_body .= "Form Details: \n\n";
    $text_body .= "First Name: $firstName \n";
    $text_body .= "Last Name: $lastName \n";
    $text_body .= "Email: $email \n";
    $text_body .= "Contact Number: $contactNumber \n";
    $text_body .= "Address 1: $address1 \n";
    $text_body .= "Address 2: $address2 \n";
    $text_body .= "City: $city \n";
    $text_body .= "Postcode: $postcode \n";
    $text_body .= "Additional Notes: $notes \n";
    $text_body .= "Company Name: $companyName \n";
    $text_body .= "Products/Services on sale: $onSale \n";
    $text_body .= "Package: $package \n";
    $text_body .= "Need power?: $power \n";
    $text_body .= "Need Wifi?: $wifi \n";
    $text_body .= "Selected Package: $traderSelectStop \n\n";
    $text_body .= "Sincerely, \n";
    $text_body .= "Pit Stop Team";


    
    // My SMTP Configuration
    $to = 'imran@oneagencymedia.uk';
    $username = 'devpapasant@gmail.com';
    $password = 'TVPRDBnSr73LW9Xq';
    $host = "smtp-relay.sendinblue.com";
    $port = 587;

    require_once(''.$_SERVER['DOCUMENT_ROOT'].'/dist/plugins/phpmailer/Exception.php');
    require_once(''.$_SERVER['DOCUMENT_ROOT'].'/dist/plugins/phpmailer/PHPMailer.php');
    require_once(''.$_SERVER['DOCUMENT_ROOT'].'/dist/plugins/phpmailer/SMTP.php');
    
    $mail = new PHPMailer();
    
    $mail->isSMTP();
    //$mail->SMTPDebug = 3;
    $mail->SMTPDebug = false;
    $mail->Host = $host;
    $mail->SMTPAuth = true;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->Port = $port;
    $mail->SMTPSecure = "tls";
    $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ]);

    $mail->isHTML(true);
    $mail->setFrom($from, $name);
    $mail->addAddress($to);
    $mail->Subject = ("$subject");
    $mail->Body = $body;
    $mail->AltBody = $text_body;

    if (!$mail->send()) {
        echo '<script>
            const h1 = document.getElementById("emailAnswer");
            console.log(h1);
            h1.innerText = "'.$failedMessage.'";
            </script>';
        ;
    } else {
        echo '<script>
            const h1 = document.getElementById("emailAnswer");
            console.log(h1);
            h1.innerText = "'.$successMessage.'";
            </script>';
    }
}

sendEmail();
?>