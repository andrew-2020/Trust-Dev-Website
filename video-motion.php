<?php include 'includes/head.php'?>

<?php include 'includes/menu.php'?>

<?php include 'includes/front.php' ?>

  <div class="motion-side">

    <div class="wrapper motionwrapper motion-side">
    <div class="motioncontent">
       <h1 class="main-title">موشن جرافيك</h1>
       <p class="main-p">نوفر لك فيديو يعرض لك منتجات شركتك بشكل جذاب .</p>
    </div>
    <div class="videopart">
      <div class="videowrapper">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/vEQQW79rDec" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
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

<?php include 'includes/footer.php' ?>

<?php include 'includes/tail.php' ?>
