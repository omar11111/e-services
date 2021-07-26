<?php 
session_start();
$pageTitle ='اتفاقية الإستخدام';
include 'head.php';
include 'header1.php';

?>



  

<!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel" >

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/error.gif" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>عفواَ حدث خطأ</h2>
                <p>لمتابعة استخدام هذه الصفحة يجب تسجيل الدخول اولا</p>
                 <a href="login.php" class="btn btn-success rounded-pill">تسجيل الدخول</a>
                <a href="signup.php" class="btn btn-danger rounded-pill">حساب جديد</a>
              </div>
            </div>
          </div>

         

          

         

        </div>

        

      </div>
    </div>
  </section><!-- End Intro Section -->

  

<?php 
include 'foot.php';
?>