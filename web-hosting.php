<?php include 'includes/head.php'?>

<?php include 'includes/menu.php'?>

<?php include 'includes/front.php' ?>

<div style="margin-bottom:-3rem !important;" class="wrapper webhostingwrapper">
  <div id="packBox" class="packs"></div>
</div>
<svg style="margin-bottom:-10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
  <?php include 'includes/shadow-filter.php'?>
   <path filter="url(#shadow)" fill-opacity="1"  fill="#1a001a"  d="M0,160L34.3,176C68.6,192,137,224,206,224C274.3,224,343,192,411,202.7C480,213,549,267,617,250.7C685.7,235,754,149,823,133.3C891.4,117,960,171,1029,165.3C1097.1,160,1166,96,1234,90.7C1302.9,85,1371,139,1406,165.3L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
   </path>
</svg>
<div style="display: none;overflow:hidden;" id="hidden-content">
  <form style="visibility:hidden;" class="dummy-form"  method="" id="dummyform">
    <!-- <div  class="line1 line"><input type="text" name="packname" placeholder="" required/> <span>لقد اخترت باقة</span> </div> -->
    <div  class="line2 line"><input type="text"           placeholder="" required disabled /> <span>السعر</span> </div>
    <div  class="line5 line"><input type="text"   placeholder="" required disabled /> <span>نظام الدفع </span> </div>
    <div  class="line5 line"><input type="text"    required disabled /> <span>المساحة </span> </div>
    <div  class="line5 line"><input type="text"    placeholder="" required disabled /> <span>معدل نقل البيانات </span> </div>
    <div  class="line5 line"><input type="text"    placeholder="" required disabled /> <span>عدد الايميلات </span> </div>
    <div  class="line3 line"><input type="text"           placeholder="" required disabled /> <span>الدومين</span> </div>
    <div  class="line3 line"><input type="text"        placeholder="" required disabled /> <span>لوحة التحكم</span> </div>
    <div  class="line4 line"><input type="submit"  value="تأكيد"></div>
  </form>
  <form class="user-form pack-form" id="packForm">

    <div  class="line"> <input type="text" name="packName"      value="" disabled /> <span> اسم الباقة </span> </div>
    <div  class="line"> <input type="text" name="description"   value="" disabled /> <span> الوصف </span> </div>
    <div  class="line"> <input type="text" name="price"         value="" disabled /> <span> السعر</span> </div>
    <div  class="line"> <input type="text" name="timeInterval"  value="" disabled /> <span> نظام الدفع </span> </div>
    <div  class="line"> <input type="text" name="size"          value="" disabled /> <span> المساحة </span> </div>
    <div  class="line"> <input type="text" name="clicks"        value="" disabled /> <span> عدد الكليكات  </span> </div>
    <div  class="line"> <input type="text" name="campDu"        value="" disabled /> <span> مدة الحملة </span> </div>
    <div  class="line"> <input type="text" name="transferRate"  value="" disabled /> <span> معدل نقل البيانات </span> </div>
    <div  class="line"> <input type="text" name="emails"        value="" disabled /> <span> عدد الايميلات </span> </div>
    <div  class="line"> <input type="text" name="domain"        value="" disabled /> <span> الدومين</span> </div>
    <div  class="line"> <input type="text" name="dashboard"     value="" disabled /> <span> لوحة التحكم</span> </div>
    <div  class="line"> <input type="button" name="confirm" value="تأكيد"></div>
  </form>
  <form class="user-form request-form"  id="requestForm">
    <div  class="line2 line"><input dir="rtl" type="text" name="user-name"   value=""  required/> <span>الاسم</span>   </div>
    <div  class="line5 line"><input dir="rtl" type="text" name="user-mob"    value=""  required/> <span>موبايل</span> </div>
    <div  class="line5 line"><input dir="rtl" type="email" name="user-email" value=""  required/>  <span>الايميل</span> </div>
    <div  class="line4 line"> <div class="waiter-wrapper">
      <div class="waiter">
        <div class="outer"><div class="inner"></div> </div>
        <div class="outer"><div class="inner"></div> </div>
        <div class="outer"><div class="inner"></div> </div>
        <div class="outer"><div class="inner"></div> </div>
      </div>
      </div>
      <input id="req_button" type="button" name="submit" value="اطلب">
    </div>
  </form>
  <div class="user-form user-msg  user-success">
    <h1>تم تنفيذ طلبك بنجاح</h1>
    <h4>شكرا لاختياركم تراست لتطوير البرمجيات</h4>
  </div>
 <div  class="user-form user-msg  user-fail">
   <h1>! عفوا لم نتمكن من تنفيذ طلبك</h1>
   <h4>حاول مرة اخرى</h4>
 </div>
</div>
<style media="screen">
    .user-form {
      position: absolute;
      top: 50%;
      left: 50%;
      transition: 0.4s ease;
      width: 90%;
    }
    .user-msg {
      transform: translate(200% , -50%);
      font-family: 'Aref Ruqaa', serif;
    }
    .user-success * {
       color: #27ae60;
       text-align: center;
     }
    .user-fail * {
        color: #e74c3c;
        text-align: center;
      }
    .pack-form {
      transform: translate(-50% , -50%);
    }
    .request-form{
      transform: translate(100% , -50%);
    }
    .shifted .pack-form {
      transform: translate(-250% , -50%);
    }
    .shifted .request-form {
      transform: translate(-50% , -50%);
    }
    .finished-suc .request-form , .finished-fail .request-form {
      transform: translate(-250% , -50%);
    }
    .finished-suc .user-success {
      transform: translate(-50% , -50%);
    }
    .finished-fail .user-fail {
      transform: translate(-50% , -50%);
    }
     input[type='button'] , input[type='submit'] {
       cursor: pointer;
       width: 130px;
     }
    .result-hdn{
      display: none;
    }
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
    .line:nth-child(4) input {
      height: auto !important;
     }
     .line input {
       text-align: center;
     }
</style>
<?php include 'includes/footer.php' ?>
<script src="js/packing.js" type="text/javascript"></script>
<script type="text/javascript">

    var packObjects = [{ "packType": 'hosting' , 'packName': '' , 'price': '١٢٠٠' , 'timeInterval': 'سنويا' , 'description': '' , 'size': '500  MB' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '5 G.B' , 'emails': '10' ,   'domain': 'Free 1' , 'dashboard': 'Available' }
                      ,{ "packType": 'hosting' , 'packName': '' , 'price': '٢٠٠٠' , 'timeInterval': 'سنويا' , 'description': '' , 'size': '700  MB' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '5 G.B' , 'emails': '90' ,   'domain': 'Free 1' , 'dashboard': 'Available' }
                      ,{ "packType": 'hosting' , 'packName': '' , 'price': '٢٢٠٠' , 'timeInterval': 'سنويا' , 'description': '' , 'size': '1000 MB' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '5 G.B' , 'emails': '1000' , 'domain': 'Free 1' , 'dashboard': 'Available' }
                      ,{ "packType": 'hosting' , 'packName': '' , 'price': '٢٦٠٠' , 'timeInterval': 'سنويا' , 'description': '' , 'size': '1500 MB' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '5 G.B' , 'emails': '1000' , 'domain': 'Free 1' , 'dashboard': 'Available' }
                      ,{ "packType": 'hosting' , 'packName': '' , 'price': '٣٢٠٠' , 'timeInterval': 'سنويا' , 'description': '' , 'size': '1500 MB' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '5 G.B' , 'emails': '1000' , 'domain': 'Free 1' , 'dashboard': 'Available' }
                      ,{ "packType": 'hosting' , 'packName': '' , 'price': '٥٠٠٠' , 'timeInterval': 'سنويا' , 'description': '' , 'size': '2000 MB' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '5 G.B' , 'emails': '2000' , 'domain': 'Free 1' , 'dashboard': 'Available' }]

    Pack_Builder(packObjects);
</script>
<?php include 'includes/tail.php' ?>
