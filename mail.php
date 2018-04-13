<?php

$name = $_POST['name'];
$bodyMail = $_POST['bodyMail'];
$mail = $_POST['email'];

if(!empty($name) || !empty($bodyMail) || !empty($mail)) {
    $to      = 'calcomp.furb@gmail.com';
    $subject = 'Contato Via Site - '.$name;
    $message = 'Enviado por: '. $name."\r\n\r\n". $bodyMail;
    $headers = 'From: '. $mail . "\r\n" .
        'Reply-To: '. $mail . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    if(mail($to, $subject, $message, $headers))  {
        echo("<html><head><meta charset='utf-8'> </head><body><div style='text-align:center;'><p>E-mail enviado com sucesso!</p></div></body></html>");
    } else {
        echo("<html><head><meta charset='utf-8'> </head><body><div style='text-align:center;'><p>Ocorreu um erro ao enviar um e-mail. Tente novamente!</p></div></body></html>");
    }
} else {
    echo("<html><head><meta charset='utf-8'> </head><body><div style='text-align:center;'><p>Ocorreu um erro ao enviar um e-mail. Tente novamente!</p></div></body></html>");
}

?>
