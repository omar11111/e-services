<?php 
session_start();
$pageTitle ='مساعدة';
include 'serhead.php';

?>
<style>
    .card-header{
       
    }
</style>
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
                <h2>مرحبًا بك بمركز المساعدة </h2>
                 <p>في هذا القسم سوف تجد اجوبة علي بعض الأسئله الشائعه والتي قد تدور في ذهنك</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main"> 
      
<!-- ======= Questions Section ======= -->
      <div class="container">
        <header class="section-header">
            <br>
          <h3 class="section-title">الاسئله الشائعة</h3>
        </header>
        
<div  id="accordion" class="mb-5" style="text-align:right">
    
  <div class="mb-3">
    <div class="card-header border rounded" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        سؤال 1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       أبجد هوز حطي كلمن سعفص قرشت ثخذ ضظغ
      </div>
    </div>
  </div>
            
<div class="mb-3">
    <div class="card-header border rounded" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          سؤال 2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        أبجد هوز حطي كلمن سعفص قرشت ثخذ ضظغ
      </div>
    </div>
  </div>
    
    <div class="mb-3">
    <div class="card-header border rounded" id="heading3">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
          سؤال 3
        </button>
      </h5>
    </div>
    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
      <div class="card-body">
        أبجد هوز حطي كلمن سعفص قرشت ثخذ ضظغ
      </div>
    </div>
  </div>
    
    
    <div class="mb-3">
    <div class="card-header border rounded" id="heading4">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          سؤال 4
        </button>
      </h5>
    </div>
    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
      <div class="card-body">
        أبجد هوز حطي كلمن سعفص قرشت ثخذ ضظغ
      </div>
    </div>
  </div>
    
    
    <div class="mb-3">
    <div class="card-header border rounded" id="heading5">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          سؤال 5
        </button>
      </h5>
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
      <div class="card-body">
        أبجد هوز حطي كلمن سعفص قرشت ثخذ ضظغ
      </div>
    </div>
  </div>
    
    
    <hr>
    <p class="font-weight-bold"> في حالة وجود مشكلة في الدخول الي الموقع او لم تجد اجابة لإستفسارك يرجي التواصل معنا من 
    <a href="contact.php">هنا </a>
    </p>
</div>
</div>   
</main><!-- End #main -->

<?php 
include 'servicefooter.php';
?>