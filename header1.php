<!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">
 <div id="logo" class="">
        <h1><a href="index.php" class="scrollto">E-Services</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      <!--  <a href="#intro"><img src="assets/img/logo.png" alt=""></a>-->
      </div>
      <nav dir="" id="nav-menu-container" class="">
          
        <ul class="nav-menu">
             <li class="menu-active"><a href="index.php">الرئيسية</a></li>
            <li class="menu-has-children"><a href="">الخدمات</a>
            <ul dir="rtl" style="text-align:right">
            <li><a href="service1.php">الخدمات الحكومية</a></li>
            <li><a href="service2.php">الخدمات الصحية</a></li>
            <li><a href="service3.php">الخدمات التعليمية</a></li>
            <li><a href="service4.php">الخدمات الرياضية</a></li>
            <li><a href="service5.php">الخدمات الترفيهية</a></li>
            <li><a href="service6.php">الخدمات الثقافية</a></li>
            <li><a href="service7.php">الخدمات السياحية</a></li>
                
            </ul>
          </li>
            <li><a href="team.php">فريق العمل</a></li>
                         <li><a href="about.php">عن الموقع</a></li>
                        <li><a href="contact.php">تواصل معنا</a></li>
            <li><a href="search.php">بحث</a></li>

<?php  if (isset($_SESSION['email'])){?>
            <li class="menu-has-children"><a href="" class="nav-item nav-link active" >
                        <img src="assets/img/user.png" style="width: 27px;
                       height: 27px;border-radius: 42px;"> 
                    </a>
                
                <ul dir="rtl" style="text-align:right">
                    
                 <li style="text-align:center;color:#18d26e">
                   
                     <a > الإسم : <?php echo $_SESSION['name'] ; ?> </a>
                    </li><hr>
                      
                    <li><a href="help.php">مساعدة </a></li>
                    <li><a href="logout.php">تسجيل الخروج </a></li>
                    
                    <?php } else { ?>
                    <li class="menu-has-children"><a href="">الحساب</a>
                <ul dir="rtl" style="text-align:right">
                 
                    <li><a href="login.php">تسجيل الدخول</a></li>
                    <li><a href="signup.php">انشاء حساب</a></li> 
                    
                </ul>
            </li>
                     <?php } ?>
                </ul>
            </li>
       
        
        
          
          
       
       
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->