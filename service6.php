<?php 
session_start();
$pageTitle ='الخدمات الثقافية';
include 'head.php';
include 'header1.php';
if(isset($_SESSION['email'])){
    
    

}else{
if (isset($_SESSION['admin'])){
    header('Location: admin/admin.php');  // redirect to home page 
}else{
    header('Location:require.php');
    exit();
}

}
?>

<!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel"  class="carousel">
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/cult.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>الخدمات الثقافية</h2>
                <p>في هذه الصفحة يتم عرض مجموعة من الخدمات الثقافية المختلفة </p>
                <a href="#portfolio" class="btn-get-started scrollto">ابدأ الأن</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main"> 
     <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">

<div class="container">

  <header class="section-header">
    <h3 class="section-title">الخدمات</h3>
  </header>

  <div class="row portfolio-container ">

  <?php

    $db = mysqli_connect('localhost', 'root', '', 'recommendation');
    mysqli_query($db,"SET NAMES 'utf8'");
    $sql = "SELECT * FROM services where webtype='Cultural' order by RAND() limit 200 ";

        $result = mysqli_query($db,$sql);
        
        
        while ($row = mysqli_fetch_row($result)) {
          websites($row['0'],$row['1'] ,"./admin/uploads/avatars/".$row['2'],$row['3'],$row['5'],$row['6']);
            
        } ?>

  </div>




</div>
</section><!-- End Portfolio Section -->

      
  </main><!-- End #main -->

<?php 
include 'servicefooter.php';
?>