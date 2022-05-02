
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail(){

    // Upload File Error Message
    $uploadFileErrorMessage = "Your uploaded file did not meet the requirements. Please try again.";

    // GET FORM DATA
    $model = $_POST["model"];
    $registration = $_POST["registration"];
    $type = $_POST["type"];
    $modifications = $_POST["modifications"];

    $maxsize = 2 * 1024 * 1024; // 2 MB
    $types = array('image/png', 'image/jpeg', 'image/jpg'); // allowed mime-types

    $file1 = $_FILES['file1']['tmp_name'];
    $file2 = $_FILES['file2']['tmp_name'];
    $file3 = $_FILES['file3']['tmp_name'];
    $file4 = $_FILES['file4']['tmp_name'];
    $file1Name = $_FILES['file1']['name'];
    $file2Name = $_FILES['file2']['name'];
    $file3Name = $_FILES['file3']['name'];
    $file4Name = $_FILES['file4']['name'];

    if($file1 != ""){
        if(filesize($file1) < $maxsize && in_array(mime_content_type($file1),$types)){
        }else{
            echo '<script>
                const h1 = document.getElementById("emailAnswer");
                h1.innerText = "'.$uploadFileErrorMessage.'";
                </script>';
            exit;
        }
    }
    if($file2 != ""){
        if(filesize($file2) < $maxsize && in_array(mime_content_type($file2),$types)){
        }else{
            echo '<script>
                const h1 = document.getElementById("emailAnswer");
                h1.innerText = "'.$uploadFileErrorMessage.'";
                </script>';
            exit;
        }
    }
    if($file3 != ""){
        if(filesize($file3) < $maxsize && in_array(mime_content_type($file3),$types)){
        }else{
            echo '<script>
                const h1 = document.getElementById("emailAnswer");
                h1.innerText = "'.$uploadFileErrorMessage.'";
                </script>';
            exit;
        }
    }
    if($file4 != ""){
        if(filesize($file4) < $maxsize && in_array(mime_content_type($file4),$types)){
        }else{
            echo '<script>
                const h1 = document.getElementById("emailAnswer");
                h1.innerText = "'.$uploadFileErrorMessage.'";
                </script>';
            exit;
        }
    }
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $mobileNumber = $_POST["mobileNumber"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $postcode = $_POST["postcode"];
    $instagramName = $_POST["instagramName"];

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
    $body .= "Mobile Number: $mobileNumber <br>";
    $body .= "Address 1: $address1 <br>";
    $body .= "Address 2: $address2 <br>";
    $body .= "City: $city <br>";
    $body .= "Postcode: $postcode <br>";
    $body .= "Instragram Name: $instagramName <br>";
    $body .= "Vehicle Make / Model: $model <br>";
    $body .= "Vehicle Registration: $registration <br>";
    $body .= "Vehicle Type: $type <br>";
    $body .= "Modifications: $modifications <br><br>";
    $body .= "Sincerely, <br>";
    $body .= "Pit Stop Team";

    // Plain text body (for mail clients that cannot read HTML)
    $text_body  = "This email was sent from Pit Stop Trader Contact Form. \n\n";
    $text_body .= "Form Details: \n\n";
    $text_body .= "First Name: $firstName \n";
    $text_body .= "Last Name: $lastName \n";
    $text_body .= "Email: $email \n";
    $text_body .= "Mobile Number: $mobileNumber \n";
    $text_body .= "Address 1: $address1 \n";
    $text_body .= "Address 2: $address2 \n";
    $text_body .= "City: $city \n";
    $text_body .= "Postcode: $postcode \n";
    $text_body .= "Instragram Name: $instagramName \n";
    $text_body .= "Vehicle Make / Model: $model \n";
    $text_body .= "Vehicle Registration: $registration \n";
    $text_body .= "Vehicle Type: $type \n";
    $text_body .= "Modifications: $modifications \n\n";
    $text_body .= "Sincerely, \n";
    $text_body .= "Pit Stop Team";
    
    // My SMTP Configuration
    $to = 't0ny@hotmail.gr';
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
    $mail->AddAttachment($file1,$file1Name);
    $mail->AddAttachment($file2,$file2Name);
    $mail->AddAttachment($file3,$file3Name);
    $mail->AddAttachment($file4,$file4Name);

    if (!$mail->send()) {
        echo '<script>
            const h1 = document.getElementById("emailAnswer");
            h1.innerText = "'.$failedMessage.'";
            </script>';
        ;
    } else {
        echo '<script>
            const h1 = document.getElementById("emailAnswer");
            h1.innerText = "'.$successMessage.'";
            </script>';
    }
}

//sendEmail();
?>