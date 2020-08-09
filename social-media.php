<?php include 'includes/head.php'?>

<?php include 'includes/menu.php'?>

<?php include 'includes/front.php' ?>

<div class="wrapper webhostingwrapper">
  <div class="social-details">
    <div class="social-ideas">
      <h1>جميع باقات السوشيال ميديا تشتمل على :</h1>
      <p>&#10070; تصميم لوجو + كوفر للصفحه</p>
      <p>&#10070; عمل افكار تسويقيه جذابه</p>
      <p>&#10070; تقارير شهريه لتحليل احصائيات و اداء الصفحات</p>
      <p>&#10070; انشاء خطة لاداره صفحه الفيسبوك و الحتوي بالاتفاق مع العميل</p>
      <p>&#10070; مسئوليه عن كتاية المحتوي و التصميمات للبوستات بشكل احترافي</p>
      <p>&#10070; تخصيص موظف مختص للرد علي الاسئله الشائعه داخل الصفحه</p>
      <p>&#10070; مدير اداري لكل حساب ليكون حلقه الربط بين العميل و فريق السوشيال ميدي</p>
    </div>
    <div class="social-img">
      <img style="width:100%;" src="images/social-media-ideas.jpg" alt="">
    </div>
  </div>
  <hr style="height:4px;border-radius:50%;background: linear-gradient(45deg , #d35400 , #e74c3c);margin:50px 0;">
  <div class="packs" id="packBox">
    <h1 style="flex-basis:100%;text-align:center;">خطط وباقات التسويق على السوشيال ميديا</h1>
  </div>
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

<style media="screen">
   .pack h6 {
      min-height: 224px;
    }
   .puller {
     display:none;
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
       .pack h6 {
           min-height: auto;
          }
        .front {
          clip-path: circle(70.7% at 50% 50%);
        }
    }
</style>

<?php include 'includes/footer.php' ?>

<script src="js/packing.js" type="text/javascript"></script>
<script type="text/javascript">
    var des1 = "نقوم بتصميم 8 منشورات لمنتجك بأحدث التصميمات العالمية ونقوم بالنشر على صفحتك الخاصه" ,
        des2 = "من خلال تلك الباقة نقوم بتصميم 12 منشور لك ولمنتجاتك ونقوم بنشرهم على صفحتك الخاصة 300 لايك للتفاعل على المنشور<br> توفير موظف مختص لإدارة الصفحة والرد على كافة الاستفسارات<br>" ,
        des3 = "من خلال الباقة الإدارية نقوم بإدارة الصفحات الخاصه بك على فيسبوك وانستجرام <br>وايضا نقوم بتصميم 16 منشور للفيسبوك و 16 منشور لانستجرام <br>وتوفير موظف مختص للرد على كافة الاستفسارات الخاصة بمنتجاتك",
        des4 = "من خلال الباقة الشاملة نقوم بإدارة الصفحات الخاصه بك على فيسبوك وانستجرام <br>وايضا نقوم بتصميم 16 منشور للفيسبوك و 16 منشور لانستجرام <br>وتوفير موظف مختص للرد على كافة الاستفسارات الخاصة بمنتجاتك <br>تصميم فيديو خاص بك",
        des5 = "نقوم بتصميم 8 منشورات لمنتجك ونقوم بالنشر على صفحتك الخاصه",
        des6 = "نقوم بتصميم 12 منشور لمنتجك ونقوم بالنشر على صفحتك الخاصه",
        des7 = "من خلال تلك الباقة نقوم بتصميم 16 منشور لك ولمنتجاتك ونقوم بنشرهم على صفحتك الخاصة";
    var packObjects = [{ "packType": 'facebook' , 'packName': 'صفحة فيس بوك'   , 'price': '١٥٠٠' ,  'timeInterval': 'سنويا' , 'description': des1 , 'size': '' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '' , 'emails': '' , 'domain': '' , 'dashboard': '' }
                      ,{ "packType": 'facebook' , 'packName': 'ادارة و نشر'    , 'price': '٣٥٠٠' ,  'timeInterval': 'سنويا' , 'description': des2 , 'size': '' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '' , 'emails': '' , 'domain': '' , 'dashboard': '' }
                      ,{ "packType": 'facebook' , 'packName': 'الباقة الادارية' , 'price': '٥٠٠٠' ,  'timeInterval': 'سنويا' , 'description': des3 , 'size': '' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '' , 'emails': '' , 'domain': '' , 'dashboard': '' }
                      ,{ "packType": 'facebook' , 'packName': 'الباقة الشاملة' , 'price': '٨٠٠٠' ,  'timeInterval': 'سنويا' , 'description': des4 , 'size': '' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '' , 'emails': '' , 'domain': '' , 'dashboard': '' }
                      ,{ "packType": 'insta'    , 'packName': 'صفحة انستجرام A' , 'price': '١٨٠٠' , 'timeInterval': 'سنويا' , 'description': des5 , 'size': '' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '' , 'emails': '' , 'domain': '' , 'dashboard': '' }
                      ,{ "packType": 'insta'    , 'packName': 'صفحة انستجرام B' , 'price': '٣٠٠٠' , 'timeInterval': 'سنويا' , 'description': des6 , 'size': '' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '' , 'emails': '' , 'domain': '' , 'dashboard': '' }
                      ,{ "packType": 'insta'    , 'packName': 'صفحة انستجرام C' , 'price': '٣٥٠٠' , 'timeInterval': 'سنويا' , 'description': des7 , 'size': '' , 'clicks': '' ,  'campDu': ''  ,  'transferRate': '' , 'emails': '' , 'domain': '' , 'dashboard': '' }]

    Pack_Builder(packObjects);
</script>

<?php include 'includes/tail.php' ?>
