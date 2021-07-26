<?php 
session_start();
$pageTitle ='تسجيل الدخول';
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
include ('conn.php');
include ('server.php');
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
    z-index: 1;
}
/* only used for background overlay not needed for centering */
form:before {
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    background-color: rgba(0,0,0,0.3);
    z-index: -1;
    border-radius: 10px;
}
</style>
<!-- ======= Intro Section ======= -->
 <section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <?php
                    include('errors.php');?>
                    <h1 class="display-4 py-2 text-truncate">تسجيل الدخول</h1>
                    <div class="px-2">
                        <form class="justify-content-center" dir="rtl" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="البريد الإلكتروني" name="email">
                            </div>
                            <div class="form-group">
                                
                                <input type="password" class="form-control" placeholder="كلمة السر" name="pass">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg" name="login">تسجيل الدخول</button><br><br>
                            <span>ليس لدى حساب</span>
                            <a href="signup.php"> انشئ حساب جديد الأن</a>
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
