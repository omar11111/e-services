
<?php 
$pageTitle ='حذف الموقع';

include 'head.php';
include ('../conn.php');
include('../server.php');

?>

    <div class="container-fluid display-table">
        <div class="row display-table-row">
            
            <!--main content area-->
            <div class="col-md-10  display-table-cell valign-top box ">
                   <!--header navpar-->
               <?php
                            include('nav.php');

                ?>


                   <div dir="rtl" class="container">
                    <div class="row">  
                      
  <div class="col-md-8 mx-auto ">
      
      <?php 
        include('../errors.php');
        include('../success.php');
        ?>
      
        <form  method="POST" enctype="multipart/form-data">

<br>
               <h2><span>حذف موقع </span></h2>
<br>
                      <div class="form-group">
                        <input type="text" name="webname" placeholder="اسم الموقع " class="form-control" required>

                      </div>
        

                      <div class="form-group">
                        <select class="form-control" name="webtype">
                        <option>Governmental</option>
                        <option>Healthy</option>
                        <option>Educational</option>
                        <option>sport</option>
                        <option>Entertainment</option>
                        <option>Cultural</option>
                        <option>tourism</option>
                      </select>
                      </div>
              <!-- btn regestration -->
                    <div class="form-group">       
                        <button type="submit"   name="del" class="btn btn-lg btn-block " style="background-color:#162030;color: white">حذف </button>

                    </div>

              
                <br>
          <br>
        </form>
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