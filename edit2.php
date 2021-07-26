
<?php 
$pageTitle ='تعديل الموقع';

include 'head.php';
include ('../conn.php');
include('../server.php');

?>


    <div class="container-fluid display-table">
        <div class="row display-table-row">
             
            <!--main content area-->
            <div class="col-md-10  display-table-cell valign-top box ">

                    
                 <?php
                            include('nav.php');

                ?>

                    <div class="container">
                            <div class="row">  
                              
       <!--  /*/*/* -->
         <div dir="rtl" class="container " style="width: 70%">
             
             <?php 
        include('../errors.php');
        include('../success.php');
        ?>
            <form  method="POST" enctype="multipart/form-data">

<br>
                <h2><span>البيانات القديمة</span></h2>

<br>
                      <div class="form-group">
                        <input type="text" name="webname" placeholder="اسم الموقع القديم" class="form-control" required>

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
               <br>
                                <h2><span>البيانات الجديدة</span></h2>
<br>
                       <div class="form-group">
                        <input type="text" name="newname" placeholder="اسم الموقع الجديد" class="form-control" required>

                      </div>
                <div class="form-group">
                        <input type="text" name="newlink" placeholder="عنوان الموقع الجديد" class="form-control" required>

                      </div>
               
                
                <div class="form-group">
                        <select class="form-control" name="newtype">
                             <option>الخدمات الحكومية</option>
                        <option>الخدمات الصحية</option>
                        <option>الخدمات التعليمية</option>
                        <option>الخدمات الرياضية</option>
                        <option>الخدمات الترفيهية</option>
                        <option>الخدمات الثقافية</option>
                        <option>الخدمات السياحية</option>
                      </select>
                      </div>
                
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
                      </select>
                      </div>
                      






                    <div class="custom-file" style="margin-bottom:20px">
                      <label dir="rtl" class="custom-file-label" for="customFile" style="text-align: center"> صورة الموقع   </label>
                      <input type="file" class="custom-file-input" id="customFile" name="avatar">
                    

                    </div>
                 <div class="form-group">
                          <textarea class="form-control"  name="newdetails" id="" cols="50" rows="4" placeholder="التفاصيل" id="websitedetails" required></textarea>

                      </div>

              <!-- btn regestration -->
                    <div class="form-group">       
                        <button type="submit"   name="update" class="btn btn-lg btn-block " style="background-color:#162030;color: white">تعديل </button>

                    </div>

                <br>
          <br>
        </form>

        </div>
                                
     <!--  /*/*/* -->
                                
                                
                              
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