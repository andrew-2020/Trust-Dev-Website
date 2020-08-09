<?php
    $to = 'andrew.naem.an@gmail.com';
    if (isset($_POST['submit'])) {
      if ($_POST['submit'] == 'ارسال') {
        $subject = $_POST['subject'];
        $from = $_POST['sender_email'];
        $sender_name = $_POST['name'];
        $message = '<html>
        <head>
        <title>' . $subject . '</title>
        <h5>From: ' . $sender_name . '</h5>
        </head>
        <body>
        <p>'. $_POST['message'] . '</p>
        </body>
        </html>';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .=
        'Reply-To: '. $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        if (mail($to , $subject , $message , $headers )) {
          echo '<h5 class="success">تم تنفيذ طلبك بنجاح </h5>';
        }else{
          echo '<h5 class="failed">لم نتمكن من تنفيذ طلبك</h5>';
        }
      }
    }

?>
