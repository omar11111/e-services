<?php 
session_start();
if (isset($_SESSION['email'])){
    header('Location: home.php');  // redirect to home page 
}else{
    if (isset($_SESSION['admin'])){
    header('Location: admin/admin.php');  // redirect to admin page 
}
}

include 'head.php';
include 'header.php';
include 'conn.php';
include 'server.php';
?>




  

<!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>E-Services Recommendation System</h2>
                <p>موقع يتيح لك تنفيذ خدمات متعدد من الاماكن المعتمده لذلك</p>
                <a href="login.php" class="btn btn-success rounded-pill">تسجيل الدخول</a>
                <a href="signup.php" class="btn btn-danger rounded-pill">حساب جديد</a>

              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/2.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>خدمات متنوعه في كافة الأنحاء</h2>
                <p>يحتوي الموقع علي خدمات متنوعة في مجالات مختلفه : خدمات حكومية - صحية - تعليمية - ترفيهية - الخ </p>
                 <a href="login.php" class="btn btn-success rounded-pill">تسجيل الدخول</a>
                <a href="signup.php" class="btn btn-danger rounded-pill">حساب جديد</a>
                  
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>سهولة في الإستخدام والتعامل</h2>
                <p> يتميز الموقع بالسهولة والسلاسه في التعامل حيث لا يتطلب تعلّم اي مهارات صعبة فقط معرفة بالإنترنت</p>
                 <a href="login.php" class="btn btn-success rounded-pill">تسجيل الدخول</a>
                <a href="signup.php" class="btn btn-danger rounded-pill">حساب جديد</a>
              </div>
            </div>
          </div>

          

         

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">


</div>
        <!-- ======= services  Section ======= -->
    <section id="portfolio" class="section-bg">

      <div class="container">

        <header class="section-header">
          <h3 class="section-title">بعض الخدمات المتاحة</h3>
        </header>
          
          
        <div class="row">
          <div dir="rtl" class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">جميع الخدمات</li>
             
              <li data-filter=".filter-Governmental">حكومية</li>
            <li data-filter=".filter-Healthy">صحية</li>
              <li data-filter=".filter-Educational">تعليمية</li>
              <li data-filter=".filter-sport">رياضية</li>
              <li data-filter=".filter-Entertainment">ترفيهية</li>
              <li data-filter=".filter-Cultural">ثقافية</li>
              <li data-filter=".filter-tourism">سياحية</li>
            </ul>
          </div>
        </div>
          
          
          
  
        <div class="row portfolio-container ">

        <?php

          $db = mysqli_connect('localhost', 'root', '', 'recommendation');
          mysqli_query($db,"SET NAMES 'utf8'");
          $sql = "SELECT * FROM services order by RAND() limit 12";

              $result = mysqli_query($db,$sql);
              
              
              while ($row = mysqli_fetch_row($result)) {
              websites2($row['1'] ,"./admin/uploads/avatars/".$row['2'],$row['3'],$row['5'],$row['6']);
            
              } ?>

        </div>


       

      </div>
    </section><!-- End Portfolio Section -->

      
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
    

  

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>فريق العمل</h3>
        </div>

        <div class="row">

          <div class="col-lg-2 col-md-4 col-sm-4 col-4 wow fadeInUp">
            <div class="member">
              <img src="assets/img/team-1.jpg" class="img-fluid" alt="" style="border-radius:30px 0px 30px 0">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mahmoud Magdy</h4>
                  <span>Full-Stack Web-Developer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="assets/img/team-2.jpg" class="img-fluid" alt="" style="border-radius:30px 0px 30px 0">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ali Ezzat Elafefy</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="assets/img/team-3.jpg" class="img-fluid" alt="" style="border-radius:30px 0px 30px 0">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Omar ALGalfy</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2  col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="assets/img/team-4.jpg" class="img-fluid" alt="" style="border-radius:30px 0px 30px 0">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Majid Shady</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
            <div class="col-lg-2  col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="assets/img/team-5.jpg" class="img-fluid" alt="" style="border-radius:30px 0px 30px 0">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Abdallah Saeed</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
            <div class="col-lg-2 col-md-4 col-sm-4 col-4  wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="assets/img/team-6.jpg" class="img-fluid" alt="" style="border-radius:30px 0px 30px 0">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mahmoud Mansour</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg wow fadeInUp" dir="rtl">
      <div class="container">

        <div class="section-header">
          <h3>تواصل معنا</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>العنوان</h3>
              <address>بنها , القليوبية مصر</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>رقم الموبايل</h3>
              <p><a href="tel:+201098836979">+201098836979</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>البريد الإلكترونى</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form method="POST" enctype="multipart/form-data"  class="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="اسمك" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
           
            <div class="form-group">
              <textarea class="form-control" name="comment" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="رسالتك"></textarea>
              <div class="validate"></div>
            </div>
            
            <div class="text-center"><button class="btn btn-success" type="submit" name="send">ارسال الرسالة</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php 
include 'footer.php';
?>