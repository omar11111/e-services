<?php 
session_start();

include 'head.php';
include '../server.php';
include '../conn.php';


if(isset($_SESSION['admin'])){
    
    

}else{

header('Location:../index.php');
    exit();
}


?>
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            
            <!--main content area-->
            <div class="col-md-10 col-sm-11 display-table-cell valign-top box ">
                   <!--header navpar-->
                   <!--header navpar-->
              <?php
                            include('nav.php');

                ?>

                    <div class=" website-details">
                        <div class="col-sm-8 bg-danger rounded mb-3 mx-auto  ">
                            <h3>عدد الزيارات للموقع</h3>
                            <div class="row">
                               <div class="col-sm-6"><i class="fas fa-chart-line"></i></div>
                               <div class="col-sm-6 float-right">321</div>
                            </div>
                        </div>
                        <div class="col-sm-8 bg-primary rounded mb-3 mx-auto">
                            <h3>عدد  مرات الضغط على الروابط</h3>
                            <div class="row">
                                <div class="col-sm-6"><i class="fas fa-chart-line"></i></div>
                                <div class="col-sm-6 ">255</div>
                            </div>
                        </div>
                        <div class="col-sm-8 bg-secondary rounded mr-3 mx-auto">
                            <h3>عدد الاشخاص الذين سجلو فى الموقع</h3>
                            <div class="row">
                                <div class="col-sm-6"><i class="fas fa-chart-line"></i></div>
                                <div class="col-sm-6 float-right">456</div>
                            </div>
                        </div>
                    </div>


                    <!--footer-->  
                    <div class="row footer" id="admin-footer">
                        
                            <div class="col-md-10 pull-left">CopyRight &copy; 2019</div>
                            <div class="col-md-2 pull-right">Admin System</div>
                        
                    </div>
                
                
            </div>

            
           <?php
            include('slide.php');
            
            ?>
        </div>
    </div>

<?php
include 'footer.php';
?>
  