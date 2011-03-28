<?php  

    $errors;
    if ($_POST && $_POST['name'] && $_POST['email'] && $_POST['subject'] && $_POST['message']) {
        
        $template = file_get_contents('email_template.html');
        
        $template = str_replace('{{name}}', $_POST['name'], $template);   
        $template = str_replace('{{email}}', $_POST['email'], $template);
        $template = str_replace('{{subject}}', $_POST['subject'], $template);
        $template = str_replace('{{message}}', $_POST['message'], $template);
        
        //$headers  = 'MIME-Version: 1.0' . "\r\n";
        //$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        
        //$headers .= "To: Kassay Zsuzsa <hello.attila@gmail.com>" . "\r\n";
        //$headers .= "From: ".$_POST['name']." <".$_POST['email'].">" . "\r\n";
        /*
        if (mail('hello.attila@gmail.com', "Message from kassayzsuzsa.com", $template, $headers)) {
            
            echo 1;
        } 
        */
        
        //mail('hello.attila@gmail.com', "Message from kassayzsuzsa.com", $template, $headers)
        
        require_once('class.phpmailer.php');
        
        $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
        
        $mail->IsSMTP(); // telling the class to use SMTP
        
        //try {
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
            $mail->Host       = "ssl://smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
            $mail->Username   = "zsu.smtp@gmail.com";  // GMAIL username
            $mail->Password   = "ZsuMailer2011";            // GMAIL password
            $mail->SetFrom('zsu.smtp@gmail.com', 'kassayzsuzsa.com');
            $mail->AddAddress('hello.attila@gmail.com', 'Dr. Kassay Zsuzsa');
            $mail->Subject = 'Message from kassayzsuzsa.com';
            $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
            $mail->MsgHTML($template);
            
            $mail->Send();
            //echo "Message Sent OK\n";
        
            echo 1;

        //} catch (phpmailerException $e) {
        //    echo 0;
          //echo $e->errorMessage(); //Pretty error messages from PHPMailer
        //} catch (Exception $e) {
          //echo $e->getMessage(); //Boring error messages from anything else!
        //    echo 0;
        //}
    } 

    die;
?>