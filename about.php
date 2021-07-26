<?php 
session_start();
$pageTitle ='عن الموقع';
include 'serhead.php';

?>



  

<!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel">

        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>عن الموقع</h2>
                <p>موقع يتيح لك تنفيذ خدمات متعدد من الاماكن المعتمده لذلك</p>
                <a href="#about" class="btn-get-started scrollto">ابدأ الأن</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">
  
    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>عن الموقع</h3>
     
        </header>

        <div class="row about-cols" dir="rtl">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title">مهمة الموقع</h2>
              <p style="text-align:right">
                مهمتنا  الأولي هي توفير الراحه والوقت والمجهود للمستخدم وتقديم خدمات يحتاجها المستخدم بشكل دوري ومن مواقع موثوق بها
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title">خطة الموقع</h2>
              <p style="text-align:right">
                نهدف الي وضع خطه مميزه واستيراتيجيه عبقريه لاقناع المستخدم باستخدام الموقع لتوفير الوقت والجهد وجذب عدد كبير من المستخدمين
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title">رؤية الموقع</h2>
              <p style="text-align:right">
                تعكس رؤيتنا مسار الشركة ويعتبر موجّهاً أساسياً في كل جوانب أعمالنا من خلال تحديد ما نحتاج لإنجازه لنستمرّ بتحقيق نمو مستدام بأعلى جودة.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->
<!-- Testimonials  -->
<section class="team-section text-center my-5">
<!-- Section heading -->
<header class="section-header">
          <h3>اراء المستخدمين</h3>
        </header>  
 
  <div class="row text-center">
   
    <div class="col-lg-4 col-md-4 col-sm-4 col-12 wow fadeInUp">
      <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">Anna Deynah</h4>
        <p class="font-weight-normal dark-grey-text">
          الموقع ممتاز واستفدت كثيرا</p>
      </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-4 col-12 wow fadeInUp">
      <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">John Doe</h4>
        <p class="font-weight-normal dark-grey-text">
          من افضل المواقع علي الاطلاق</p>
      </div>
    </div>
    

    <div class="col-lg-4 col-md-4 col-sm-4 col-12 wow fadeInUp">
      <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">Maria Kate</h4>   
        <p class="font-weight-normal dark-grey-text">
         سعيد بمعرفة الموقع جدا</p>
      </div>
    </div>
  </div>
</section>
<!--Testimonials -->
    
  


  </main><!-- End #main -->

<?php 
include 'footer.php';
?>