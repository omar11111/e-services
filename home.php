<?php 
session_start();
include 'head.php';
include 'header1.php';
include 'conn.php';
include 'server.php';
require_once 'recommend.php';
require_once 'content_based.php';
if(isset($_SESSION['email'])){
}else{
if (isset($_SESSION['admin'])){
    header('Location: admin/admin.php');  // redirect to home page 
}else{
    header('Location:index.php');
    exit();
}
}
 
$db = mysqli_connect('localhost', 'root', '', 'recommendation');
mysqli_query($db,"SET NAMES 'utf8'");


$sql = "SELECT * FROM services ";
  $recommendedServices=[];

    $result2 = mysqli_query($db,$sql);
    while ($row = mysqli_fetch_row($result2)) {
      $recommendedServices [$row[0].'e'] = [$row[4],$row[6]];
      
    
      }

    //echo '<pre>',print_r($recommendedServices,1),'</pre>';
    
    
   $users =[];
    $sql2 = "SELECT government FROM users  where id=".$_SESSION['id']."";
    $result3 = mysqli_query($db,$sql2);
    $row22 = $result3->fetch_assoc();
    array_push($users,$row22["government"]);


    $sql3 = "SELECT DISTINCT  webtype,webloc FROM tracking ,services where tracking.service_id=services.id and  user_id=".$_SESSION['id']."";
    $result4 = mysqli_query($db,$sql3);
    while ($row = mysqli_fetch_row($result4)) {
     array_push($users,$row[0]);
     array_push($users,$row[1]);
    
      }

    //echo '<pre>',print_r($users,1),'</pre>';
      
    
    //echo '<pre>',print_r($recommendedServices,1),'</pre>';
  $objects = [
    
    '8e' => ['المنيا', 'خدمات تعليمية', 'سياحة'],
    '11e' => ['المنيا', 'الخدمات التعليمية'],
    '13e' => ['البحيرة', 'خدمات تعليمية', 'سياحة'],
    
  ];

  //echo '<pre>',print_r($users,1),'</pre>';
  $user = ['الخدمات التعليمية', 'المنيا'];

  $engine = new ContentBasedRecommend($users, $recommendedServices);

  //var_dump($engine->getRecommendation());
  $getRecommend=$engine->getRecommendation();
  $count = 0;
  $filter = [];
  foreach ($getRecommend as $key => $value) {
    
    if($count==60){break;}
    $newKey= substr($key, 0, strlen($key)-1) ;
    array_push($filter,$newKey);
    $count++;
  }
 // echo '<pre>',print_r($getRecommend,1),'</pre>';

?>



  

<!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div  class="carousel" >
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>اهلا بك,تم تسجيل الدخول بنجاح</h2>
                <p dir="rtl">مرحبا 
                <b style="font-size:20px;color:#18d26e"> <?php echo $_SESSION['name']?>
                    </b>
                  نتمني ان تكون في تمام الصحه والعافيه 
                  </p>
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
    <h3 class="section-title">الخدمات التى تناسبك</h3>
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
    foreach ($filter as  $value) {
      $sql = "SELECT * FROM services where id =".$value;
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
include 'footer.php';
?>