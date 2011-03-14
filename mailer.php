<?php  

    $errors;
    if ($_POST && $_POST['name'] && $_POST['email'] && $_POST['subject'] && $_POST['message']) {
        
        $template = file_get_contents('email_template.html');
        
        $template = str_replace('{{name}}', $_POST['name'], $template);   
        $template = str_replace('{{email}}', $_POST['email'], $template);
        $template = str_replace('{{subject}}', $_POST['subject'], $template);
        $template = str_replace('{{message}}', $_POST['message'], $template);
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        
        $headers .= "To: Kassay Zsuzsa <hello.attila@gmail.com>" . "\r\n";
        $headers .= "From: ".$_POST['name']." <".$_POST['email'].">" . "\r\n";
        /*
        if (mail('hello.attila@gmail.com', "Message from kassayzsuzsa.com", $template, $headers)) {
            
            echo 1;
        } 
        */
        
        mail('hello.attila@gmail.com', "Message from kassayzsuzsa.com", $template, $headers)
        
        echo 1;
    } 

    die;
?>