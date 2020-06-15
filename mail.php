
<?php 
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $message = $POST['message']
    
    $email_from = 'elmehdilkhaoua@gmail.com';
    $email_subject = 'new form submited';
    
    $email_body = "user name: $name./n".
                    "user email: $visitor_email./n".
                        "user message: $message./n";
    
    $to 'lkhaoua99elmehdi@gmail.com';

    $headers = "from: $email_from \r\n";

    $headers .= "reply-to: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("location : index.html");
?>