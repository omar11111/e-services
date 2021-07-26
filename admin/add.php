<?php 
$pageTitle ='اضافة الموقع';

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


                 
                  
                    <!--content -->
                    <div dir="rtl" class="container">
                            <div class="row">  
                              
                              <div class="col-md-8 mx-auto">
      <?php 
        include('../errors.php');
        include('../success.php');
        ?>
    <form  method="POST" enctype="multipart/form-data">

<br>
               <h2><span>اضافة موقع جديد</span></h2>
<br>
                      <div class="form-group">
                        <input type="text" name="webname" placeholder="اسم الموقع " class="form-control" required>

                      </div>
         <div class="form-group">
                        <input type="text" name="weblink" placeholder="رابط الموقع " class="form-control" required>

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
                <hr>
                
                
                       <div class="form-group">
                       <select class="form-control" name="webloc">
                                    <option>القاهرة</option>
                                    <option>القليوبية</option>
                                    <option>الجيزة</option>
                                    <option>الأسكندرية</option>
                                    <option>السويس</option>
                                    <option>المنيا</option>
                                    <option>بورسعيد</option>
                                    <option>دمياط</option>
                                    <option>اسوان</option>
                                    <option>الأقصر</option>
                                    <option>الإسماعيلية</option>
                                    <option>البحيرة</option>
                                    <option>الدقهلية</option>
                                    <option>الغربية</option>
                                    <option>الفيوم</option>
                                    <option>قنا</option>
                                    <option>سوهاج</option>
                                    <option>كفرالشيخ</option>
                                    <option>مطروح</option>
                                    <option>المنوفية</option>
                                    <option>شمال سيناء</option>
                                    <option>جنوب سيناء</option>
                                    <option>حلوان</option>
                                    <option>الشرقية</option>
                                    <option>الوادى الجديد</option>
                                   <option>أسيوط</option>
                                   <option>الغردقة</option>
                                   <option>شرم الشيخ</option>
                      </select>
                      </div>
                      


                    <div class="custom-file" style="margin-bottom:20px">
                      <label dir="rtl" class="custom-file-label" for="customFile" style="text-align: center"> صورة الموقع   </label>
                      <input type="file" class="custom-file-input" id="customFile" name="avatar">
                    

                    </div>
                 <div class="form-group">
                          <textarea class="form-control"  name="webdetails" id="" cols="50" rows="4" placeholder="التفاصيل" id="websitedetails" required></textarea>

                      </div>

              <!-- btn regestration -->
                    <div class="form-group">       
                        <button type="submit"   name="add" class="btn btn-lg btn-block " style="background-color:#162030;color: white">اضافة </button>

                    </div>

                <br>
          <br>
        </form>
                              </div> 
                              
                            </div>
                    </div>
                       
                        
                    
                    
                     
                    <!--footer-->  
                    <div class="row footer" id="admin-footer">
                            <div class="float-right col-md-6 ">CopyRight &copy; 2019</div>
                            <div class="col-md-6 ">Admin System</div>
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