<?php
    echo 'submitted';
    $to = 'yostina.naem2018@gmail.com';
    $subject = "tester";
    $temp = "dummy body";
    $from = $_GET['useremail'];
    $sender_name = $_GET['username'];
    $type = $_GET['packType'];

      if($type == "hosting"){
        $subject = " طلب باقة استضافة ";
        $temp = " <div class='line'> <input value ='" . $_GET['price'] . $_GET['timeInterval'] ."' disabled ><span>السعر</span></div>
                  <div class='line'><input value ='". $_GET['emails'] . "' disabled ><span>عدد الايميلات</span></div>
                  <div class='line'><input value ='". $_GET['size'] . "' disabled ><span>المساحة</span> </div>
                  <div class='line'><input value ='". $_GET['transferRate'] . "' disabled ><span>معدل نقل البيانات</span> </div>
                  <div class='line'><input value ='". $_GET['emails'] . "' disabled ><span>عدد الايميلات</span> </div>
                  <div class='line'><input value ='". $_GET['domain'] . "' disabled ><span>الدومين </span></div>
                  <div class='line'><input value ='". $_GET['dashboard'] . "' disabled ><span>صفحة التحكم</span> </div>";
        }elseif ($type == 'insta') {

        $subject = "طلب" . $_GET['packName'];
        $temp = "<div class='line'><input value ='". $_GET['packName'] . "' disabled ><span>نوع الباقة</span></div>
                 <div class='line'> <input value ='" . $_GET['price'] . $_GET['timeInterval'] ."' disabled ><span>السعر</span></div>";
      }elseif ($type == 'facebook') {
        $subject=" طلب باقة  ". $_GET['packName'];
        $temp = "<div class='line'><input value ='". $_GET['packName'] . "' disabled ><span>نوع الباقة</span></div>
                 <div class='line'> <input value ='" . $_GET['price'] . $_GET['timeInterval'] ."' disabled ><span>السعر</span></div>";
      }elseif ($type == 'google') {
        $subject=" طلب باقة جوجل ". $_GET['packName'];
        $temp = "<div class='line'><input value ='". $_GET['packName'] . "' disabled ><span>نوع الباقة</span></div>
                 <div class='line'><input value ='". $_GET['price'] . "' disabled ><span>السعر</span></div>
                 <div class='line'> <input value ='" . $_GET['clicks']  ."' disabled ><span>عدد الكليكات</span></div>
                 <div class='line'> <input value ='" . $_GET['campDu'] ."' disabled ><span>مدة الحملة</span></div>";
      }else {
        $temp = 'No Match is detected';
      }

        $message = '<html dir="rtl" lang="ar">
        <head>
        <title>' . $subject . '</title>
        <br>
        <div class="line">Name: ' . $sender_name . '</div>
        <div class="line">Mob: ' . $_GET['usermob'] . '</div>
        <div class="line">e-mail: ' . $from . '</div>
        <style>
          .line {
            display: flex;
            margin: 20px 0;
            text-align: center;
          }
          .line span {
            display: inline-block;
            background-color: #1a001a;
            color: #fff;
            font-size: 1.4rem;
            font-family: sans-serif;
            height: 50px;
            line-height: 50px;
            width: 135px;
            text-align: center;
            position: relative;
          }
          .line input {
              height: 50px;
              width: calc(80% - 135px);
              outline: none;
              padding: 0;
              margin: 0;
              padding-right: 20px;
              font-size: 20px;
              font-weight: bold;
              font-family: sans-serif;
              text-align:center;
          }
          .line i {
            margin: auto 0 auto 2.5rem;
          }
          @media only screen and (max-width:425px){
             .line {
               width: 95%;
               margin: 20px auto;
             }
             .line span {
               width: 80px;
               height: 35px;
               line-height: 35px;
             }
             .line input {
               height: 35px;
               width: calc(100% - 80px);
             }
          }
          </style>
        </head>
        <body>
        <div class="line">تفاصيل الباقة</div>' . $temp .

        '</body>
        </html>';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .=
        'Reply-To: '. $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        if (mail($to , $subject , $message , $headers )) {
          echo '<h5 class="success">تم تنفيذ طلبك بنجاح </div>';
        }else{
          echo '<h5 class="failed">لم نتمكن من تنفيذ طلبك</div>';
        }

?>
