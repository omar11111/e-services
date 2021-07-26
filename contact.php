<?php 
session_start();
$pageTitle ='تواصل معنا';
include 'serhead.php';
include 'conn.php';
include 'server.php';
?>
<!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel" >
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/contact.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>تواصل معنا</h2>
                <p>يمكنك الأن التواصل معنا عبر البيانات التالية بخصوص اي مقترحات  او شكاوي</p>
                <a href="#contact" class="btn-get-started scrollto">ابدأ الأن</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Intro Section -->
  <main id="main">  
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