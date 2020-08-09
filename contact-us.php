
<?php include 'includes/head.php'?>

<?php include 'includes/menu.php'?>

<?php include 'includes/front.php' ?>

<div class="wrapper contactwrapper" style="margin-bottom:-3rem !important;">
    <h1>يشرفنا دائما الرد على استفساراتكم واسئلتكم</h1>
    <h2>اترك لنا رسالتك وسيتم الرد عليك فى اقرب وقت </h2>
    <h2>او قم بالاتصال مباشرة من خلال الضغط على رقم الموبايل الظاهر بالاسفل</h2>
    <form  action="contact-us.php" method="post" class="contact-us-form">
      <div  class="line1 line"><span>الاسم</span><input type="text" name="name" value="" placeholder="" required/>  </div>
      <div class="line2 line"><span>البريد الالكترونى</span><input type="email" name="sender_email" value="" placeholder="" required/>  </div>
      <div class="line5 line"><span>الموضوع</span><input type="text" name="subject" value="" placeholder="" required/>  </div>
      <div class="line3 line"><span>الرسالة </span><input type="textarea" name="message" value="" placeholder="" required/>  </div>
      <div  class="line4 line"> <div class="waiter-wrapper">
        <div class="waiter">
          <div class="outer"><div class="inner"></div> </div>
          <div class="outer"><div class="inner"></div> </div>
          <div class="outer"><div class="inner"></div> </div>
          <div class="outer"><div class="inner"></div> </div>
        </div>
        </div>
        <?php include 'emailing.php' ?>
        <input type="submit" name="submit" value="ارسال">

      </div>
      <style media="screen">
            .success {
              color: lightgreen;
              display: block;
              font-size: 1rem;
              padding: 0 0.5rem;

            }
            .failed {
              color: red;
              display: block;
              font-size: 1rem;
              padding: 0 0.5rem;

            }
           .waiter-wrapper {
             /* width: calc(100% - 10rem); */
             height: 50px;
             position: relative;
           }
           .waiter {
             position: absolute;
             top:50%;left: 0;transform: translate(20px , -50%);
             display: flex;
           }
           .outer{
               width: 25px;height: 25px;border-radius: 50%;transform: rotateZ(45deg);margin-left: -11px;
               animation: up 0.8s  ease infinite;
             }
             .outer:nth-child(1){
               animation-delay:  0.3s;
             }
             .outer:nth-child(2){
               animation-delay:  0.4s;
             }
             .outer:nth-child(3){
              animation-delay:  0.5s;

             }
             .outer:nth-child(4){
               animation-delay:  0.6s;
             }
           .inner {
               width: 50%;height: 50%;background-color: #1a001a;border-radius:50%;
             }
             @keyframes up {
               0% {transform:translateY(0px);}
               50% {transform:translateY(-10px);}
               100% {transform:translateY(0px);}
             }
         </style>
    </form>
    <div class="line5 line"><i><span>العنوان: </span></i> الزهراء ، شارع ١٥ مايو شبرا الخيمة</div>
    <div class="line5 line"> <i><span>موبايل :</span></i><a href="tel:012229411328">012229411328</a></div>
    <div class="line5 line"><i><span>الايميل: </span></i></i>info@trust.com</div>
</div>

<svg style="margin-bottom:-10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
  <?php include 'includes/shadow-filter.php'?>
   <path filter="url(#shadow)" fill-opacity="1"  fill="#1a001a"  d="M0,160L34.3,176C68.6,192,137,224,206,224C274.3,224,343,192,411,202.7C480,213,549,267,617,250.7C685.7,235,754,149,823,133.3C891.4,117,960,171,1029,165.3C1097.1,160,1166,96,1234,90.7C1302.9,85,1371,139,1406,165.3L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
   </path>
</svg>

<style media="screen">

    @keyframes clip-anim-side {
      0%{
        clip-path: circle(70px at calc(100% - 70px) 70px);
      }
      100%{
        clip-path: circle(70px at calc(100% - 70px) 70px);
      }
    }
    .front{
        clip-path: circle(70px at calc(100% - 70px) 70px);
        animation: none !important;
      }
    @media only screen and (max-width: 1024px){
        .front {
          clip-path: circle(70.7% at 50% 50%);
        }
    }
</style>
<script type="text/javascript">
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
  }
</script>
<?php include 'includes/footer.php' ?>

<?php include 'includes/tail.php' ?>
