<?php 
session_start();
$pageTitle ='انشاء حساب جديد';

if(isset($_SESSION['email'])){
    header('Location:home.php');
}else{
if (isset($_SESSION['admin'])){
    header('Location: admin/admin.php');  // redirect to home page 
}else{   
}
}
include 'head.php';
include 'header1.php';
include 'conn.php';
include('server.php');
?>
<style>
#cover {
 background-image: url(assets/img/signup.jpg);
    background-size: cover;
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    position: relative;
}
#cover-caption {
    width: 100%;
     position: relative;
     z-index: 5;
  padding-top: 60px;
}
/* only used for background overlay not needed for centering */
form:before {
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top:0;
    width: 100%;
    background-color: rgba(0,0,0,0.3);
    z-index: -1;
    border-radius: 10px;
}
</style>
 <!-- <img src="assets/img/intro-carousel/1.jpg" alt=""> -->
<!-- ======= Intro Section ======= -->
 <section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <?php
                     include('errors.php');
                    include('success.php');
                    ?>
                    <h1 class="display-4 py-2 text-truncate">انشاء حساب جديد</h1>
                    <div class="px-2">
                        <form class="justify-content-center" dir="rtl" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="اسم المستخدم " name="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="البريد الإلكتروني" name="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="العمر" name="age">
                            </div>
                            <div class="form-group" >
                                <select class="form-control " name="government">
                                    <option>المحافظه</option>
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
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="كلمة السر" name="pass1">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="تأكيد كلمة السر" name="pass2">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg" name="reg">إنشاء حساب جديد</button><br><br>
                            <span>بالفعل لدي حساب</span>
                            <a href="login.php"> تسجيل الدخول الأن</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</section>

<?php 
include 'foot.php';
?>

