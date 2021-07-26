
<?php 

// title function that echo page title
function getTitle(){
    global $pageTitle;
    if (isset($pageTitle)){
        echo $pageTitle;
    }else {
        echo 'E-service System';
    }
}


function websites($service_id ,$name,$photo,$link,$descreption,$webtype){

  $element=' <div class="col-lg-4 col-md-6 portfolio-item filter-'.$webtype.' wow fadeInUp" data-wow-delay="0.1s">
  <div class="portfolio-wrap">
   <figure>
   <div class="imgbox">
     <img src="'.$photo.'" alt="">
   </div>
    <div class="link-details">
    <div class="mt-5 mx-auto">'.$descreption.'</div>
   
   <form method="post" action="tracing.php"   target="_blank" style="                           display:flex;
        justify-content: center;
        flex-direction: column;">
    <input type="text" value="'.$link.'" style="opacity:0;" name="link">
    <input type="text" value="'. $_SESSION['id'].'" style="opacity:0;" name="user_id">
    <input type="text" class="mb-4" value="'.$service_id.'" style="opacity:0;" name="service_id">
    <button type="submit"  class="btn btn-success rounded-pill w-50" style="margin:-120px auto;">الذهاب للموقع</button>
    </form>
    </div>
   </figure>
   <div class="portfolio-info d-flex align-items-center justify-content-center">
     <h4>'.$name.'</h4>
     
   </div>
  </div>
</div>'  ;

echo $element;
}
/*<?php

        $db = mysqli_connect('localhost', 'root', '', 'recommendation');
        mysqli_query($db,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM services order by RAND() limit 1";

            $result = mysqli_query($db,$sql);
            
            
            while ($row = mysqli_fetch_row($result)) {
            websites($row['1'] ,"./assets/img/".$row['2'],$row['3'],$row['5']);
          
            } ?> */
            function websites2($name,$photo,$link,$descreption,$webtype){

              $element=' <div class="col-lg-4 col-md-6 portfolio-item filter-'.$webtype.' wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
               <figure>
               <div class="imgbox">
                 <img src="'.$photo.'" alt="">
               </div>
                <div class="link-details" style="padding-top:100px">
                <div>'.$descreption.'</div><br>
               
                <a href="'.$link.' " target="_blank" class="btn btn-success" style="border-radius:50px">الذهاب للموقع</a>
                </div>
               </figure>
               <div class="portfolio-info d-flex align-items-center justify-content-center">
              <h4>'.$name.'</h4>
            
               </div>
               
               
              </div>
            </div>'  ;
            
            echo $element;
            }