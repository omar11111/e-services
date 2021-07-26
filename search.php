<?php 
session_start();
$pageTitle ='بحث';
include 'serhead.php';
include ('conn.php');
include('server.php');
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
      <div id="introCarousel" class=" " >
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/intro-carousel/3.jpg" style="height:100%;
                
 "></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>ابحث عن خدمة </h2>
                  
                
      
        <form  method="POST" enctype="multipart/form-data">
            
        
            
            
            
  <input dir="rtl" name="webname" id="defaultLoginFormEmail" class="form-control" placeholder="اكتب اسم الخدمة هنا " required style="border-radius:50px">

   
    <div class="d-flex justify-content-between">
       

    <button class="btn btn-success btn-block my-4" type="submit" name="search2" style="border-radius:50px">بحث</button>
            
            
            
             </div>
            
        </form>
                  <br>
                  
             
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
          <h3 class="section-title">نتائج البحث</h3>
        </header>
        <div class="row">          
        </div>
        <div  class="row portfolio-container ">

            
        <?php

         
            if(empty($webname)){

            }else{
           $db = mysqli_connect('localhost', 'root', '', 'recommendation');
          mysqli_query($db,"SET NAMES 'utf8'");
          $sql = "SELECT * FROM services where webname LIKE'%$webname%'";
          $result = mysqli_query($db,$sql);
       
             while ($row = mysqli_fetch_row($result)) {
                websites($row['0'],$row['1'] ,"./admin/uploads/avatars/".$row['2'],$row['3'],$row['5'],$row['6']);
            
              }
                
            }
            
            ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

      
  </main><!-- End #main -->

<?php 
include 'servicefooter.php';
?>