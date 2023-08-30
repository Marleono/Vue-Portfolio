<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';



    
    $request = json_decode(file_get_contents('php://input'));


    $mail = new PHPMailer(true);

try {
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Port = 465;
    $mail->Username   = '***@gmail.com'; // Логин на почте
    $mail->Password   = '****';

    $mail->isHTML(true);

    $mail->setFrom('****@gmail.com', 'Maria Leonova');
    $mail->addAddress('*****@mail.ru');
    $mail->Subject = 'Новое письмо с сайта';

    $name = $request->name;
    $email = $request->email;
    $message = $request->message;
    

    // $body = '
    //     <b>Имя:</b> .$name.<br>
    //     <b>Email:</b> .$email.<br>
    //     <b>Сообщение:</b> .$message.<br>
    // ';

    $body.='<p><strong>Имя:</strong> '.$name.'</p>';
    $body.='<p><strong>Email:</strong> '.$email.'</p>';
    $body.='<p><strong>Сообщение:</strong> '.$message.'</p>';

    // if(trim(!empty($_POST['name']))){
    //     $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
    // }
    // if(trim(!empty($_POST['email']))){
    //     $body.='<p><strong>Email:</strong> '.$_POST['email'].'</p>';
    // }
    // if(trim(!empty($_POST['message']))){
    //     $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
    // }



    // if(trim(!empty($_POST['name']))){
    //     $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
    // }
    // if(trim(!empty($_POST['email']))){
    //     $body.='<p><strong>Email:</strong> '.$_POST['email'].'</p>';
    // }
    // if(trim(!empty($_POST['message']))){
    //     $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
    // }

    $mail->Body = $body; 

    // $mail->SMTPOptions = array(
    //     'ssl'=>array(
    //         'verify_peer'=>false,
    //         'verify_peer_name'=>false,
    //         'allow_self_signed'=>true
    //     )
    // );

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    // if ($mail->send()) {$message = "success";} 
    // else {$$message = "error";}


    // $response = ['message' => $message];
    // header('Content-type: application/json');
    // echo json_encode($response);
?>
