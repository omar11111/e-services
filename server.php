<?php
include 'conn.php';
// initializing variables
$name = "";
$email    = "";
$age    = "";
$password_1 ="";
$password_2 ="";
$government ="";
$errors = array();
$success =array();

/* admin */
$webname ="";
$weblink ="";
$webtype ="";
$webdetails ="";


$newname ="";
$newlink ="";
$newtype ="";
$newdetails ="";






// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'recommendation');



// REGISTER USER
if (isset($_POST['reg'])) {
    

// receive all input values from the form
$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$age = mysqli_real_escape_string($db, $_POST['age']);
$government = mysqli_real_escape_string($db, $_POST['government']);   
$pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
$pass2 = mysqli_real_escape_string($db, $_POST['pass2']);



    

//form validation: ensure that the form is correctly filled ...
//by adding (array_push()) corresponding error unto $errors array
  
  if (empty($name)) { array_push($errors, "اسم المستخدم مطلوب"); }
  if (empty($email)) { array_push($errors, "البريد الالكتروني مطلوب"); }
  if (empty($pass1)) { array_push($errors, "كلمة السر مطلوبه"); }
    

    

  if ($pass1 != $pass2) {
	array_push($errors, "كلمة السر غير متطابقه");
  }

  //first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
   $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
   /* if ($user['name'] === $name) {
      array_push($errors, "اسم المستخدم موجود مسبقاً");
    }*/

    if ($user['email'] === $email) {
      array_push($errors, "البريد الالكتروني موجود مسبقاً");
    }
  }

  //Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = sha1($pass1);//encrypt the password before saving in the database
   
  	$query = "INSERT INTO users (name, email,government,age, password) 
  			  VALUES('$name','$email', '$government','$age','$password' )";
  mysqli_query($db,"SET NAMES 'utf8'");
  mysqli_query($db, $query);
 
   		array_push($success, "تم تسجيل بياناتك بنجاح");

  }
}

      
// login form 

if(isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['pass'];
$hashedpass = sha1($pass);
    
    // check if user exixt in data base 
    $stmt =$con->prepare("SELECT id,name,email,password FROM users WHERE email=? AND password=?" );
    $stmt->execute(array($email,$hashedpass));
    $row = $stmt->fetch();
    $count = $stmt->rowCount(); 
    
    if (empty($email)) {
  	array_push($errors, "البريد الالكتروني مطلوب");
  }
  if (empty($pass)) {
  	array_push($errors, "كلمة السر مطلوبه");
  }
    // if conut > 0 this mean that data base have the user 
    if ($count >0){
        if($email==='admin@admin.com'){
            $_SESSION['admin']=$row['email']; //register session name 
            header('Location:admin/admin.php');  // redirect to home page 
        exit(); 
        }else{
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email']; //register session name 
            header('Location:home.php');  // redirect to home page 
        exit(); 
        }
    }// علشان تظهر الرساله لوو كتبت بيانات غلط مش تظهرها علفاضي والمليان 
  else if($count==0 && !empty($email) && !empty($pass) ) {
  		array_push($errors, "البريد الالكتروني او كلمة السر غير صحيحه");
  	}
}

//contact forms
if (isset($_POST['send'])) {
  //the path to store the uploaded image
 /*$msg ='';
  $target = "./images/".basename($_FILES['customFile']['name']);
  $image =$_FILES['customFile']['name'];
 
  if (file_exists($target)) {
    echo "Sorry, file already exists.";
    
}
*/
// receive all input values from the form
$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$comment = mysqli_real_escape_string($db, $_POST['comment']);

  if (empty($name)) { array_push($errors, "اسم المستخدم مطلوب"); }
  if (empty($email)) { array_push($errors, "البريد الالكتروني مطلوب"); }
  if (empty($comment)) { array_push($errors, "اكتب رسالتك"); }
  
    
    //Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$db = mysqli_connect('localhost', 'root', '', 'recommendation');
    mysqli_query($db,"SET NAMES 'utf8'");
    
  	$query = "INSERT INTO contact (name,email,comment,photo) 
          VALUES('$name','$email','$comment','') ";
  
    mysqli_query($db, $query);
   }
/*
    if (move_uploaded_file($_FILES['customFile']['tmp_name'], $target)) {
      
      $mag="image uploded";
      

    }else{
      $msg = "not uploded";
    }

  
    
 
  }else {
    array_push($success, "gaied ");
  }

*/
  
    
}


// Admin Add service
if (isset($_POST['add'])) {
    

// receive all input values from the form
$webname = mysqli_real_escape_string($db, $_POST['webname']);
$weblink = mysqli_real_escape_string($db, $_POST['weblink']);
$webtype = mysqli_real_escape_string($db, $_POST['webtype']);
$webloc = mysqli_real_escape_string($db, $_POST['webloc']);    
$webdetails = mysqli_real_escape_string($db, $_POST['webdetails']);   


    
    // upload vaariables
$avatarname = $_FILES['avatar']['name'];
$avatarsize = $_FILES['avatar']['size'];
$avatartmp = $_FILES['avatar']['tmp_name'];
$avatartype = $_FILES['avatar']['type'];

// alowed enxtentions 
$avatarallowedextention=array("jpeg","jpg","png");

// get allowed extensions
$result=explode('.',$avatarname);
$avatarextension=strtolower(end($result));
    
if(in_array($avatarextension,$avatarallowedextention)){
       
};
    
$avatar=rand(0,100000) .'_'.$avatarname;

    
//first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $service_check_query = "SELECT * FROM services WHERE webname='$webname' OR weblink='$weblink' LIMIT 1";
  $result = mysqli_query($db, $service_check_query);
   $service = mysqli_fetch_assoc($result);
  
  if ($service) { // if user exists
    if ($service['webname'] === $webname) {
      array_push($errors, "عفواً الخدمه موجودة مسبقا");
    }

    if ($service['weblink'] === $weblink) {
      array_push($errors, "عفواً رابط الموقع موجود مسبقا");
    }
  }
    
    // validation of aavatar extention // علشان تظهر الرساله لوو كتبت بينناتا غلط مش تظهرها علفاضي والمليان 
if (!empty($avatarname) &&!in_array($avatarextension,$avatarallowedextention)) { array_push($errors, "عفوا امتداد الصوره خطأ"); }
    // حجم الصوره 
     if ($avatarsize > 2097152 ) { array_push($errors, "عفوا حجم الصوره كبيرأ"); }
    
    // لو الصوره فاضيه اعملل كذا default avatar

    if(empty($avatarname)) {
        
        $avatar = "default.jpg";
    }

  //Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
    move_uploaded_file($avatartmp,"uploads/avatars/". $avatar);
    mysqli_query($db,"SET NAMES 'utf8'");
  	$query = "INSERT INTO services (webname,weblink,webtype,webloc,webdetails,avatar) 
  			  VALUES('$webname','$weblink', '$webtype','$webloc','$webdetails','$avatar')";
  	mysqli_query($db, $query);
    array_push($success, "تم إضافة الخدمة بنجاح");

  }
}

// Admin Delete service

if(isset($_POST['del'])){
$webname = $_POST['webname'];
$webtype= $_POST['webtype'];

    // check if user exixt in data base 
    $stmt =$con->prepare("SELECT * FROM services WHERE webname=? AND webtype=?" );
    $stmt->execute(array($webname,$webtype));
    $row = $stmt->fetch();
    $count = $stmt->rowCount(); 
    
    // if conut > 0 this mean that data base have the user 
    if ($count >0){
       
    $query = "DELETE FROM services WHERE webname='$webname' AND webtype='$webtype'";
    mysqli_query($db, $query);
           array_push($success, "تم حذف الخدمة بنجاح");

    }// 
    else {
array_push($errors, "عفواً المعلومات خاطئة");
  	}
    
 
}



// Admin update service

if(isset($_POST['search'])){
$webname = $_POST['webname'];
$webtype= $_POST['webtype'];
    

    // check if user exixt in data base 
    $stmt =$con->prepare("SELECT * FROM services WHERE webname=? AND webtype=?" );
    $stmt->execute(array($webname,$webtype));
    $row = $stmt->fetch();
    $count = $stmt->rowCount(); 
    
    // if conut > 0 this mean that data base have the user 
    if ($count >0){
       
           array_push($success, "الموقع مسجل يمكنك تعديل البيانات");

    }// 
    else {
array_push($errors, "عفواً الموقع غير مسجل لدينا");
  	}
    
 
}


if(isset($_POST['update'])){
$webname = $_POST['webname'];
$webtype= $_POST['webtype'];
$newname= $_POST['newname'];
$newlink= $_POST['newlink'];
$newtype= $_POST['newtype'];
$newdetails= $_POST['newdetails'];


    // check if user exixt in data base 
    $stmt =$con->prepare("SELECT * FROM services WHERE webname=? AND webtype=?" );
    $stmt->execute(array($webname,$webtype));
    $row = $stmt->fetch();
    $count = $stmt->rowCount(); 
    
    
    
    
       // avatar
$oldavatar=$row['avatar'];  

// upload vaariables    
$avatarname = $_FILES['avatar']['name'];
$avatarsize = $_FILES['avatar']['size'];
$avatartmp = $_FILES['avatar']['tmp_name'];
$avatartype = $_FILES['avatar']['type'];
    
// alowed enxtentions 
$avatarallowedextention=array("jpeg","jpg","png");
    
// get allowed extensions
$result=explode('.',$avatarname);
$avatarextension=strtolower(end($result));
    
if(in_array($avatarextension,$avatarallowedextention)){
};
$avatar=rand(0,100000) .'_'.$avatarname;
    
    
    
    if(empty($avatarname)) {
        
       if ($count >0){
       

$query = "UPDATE services 
set webname='$newname' ,
weblink='$newlink',
webtype='$newtype',
webdetails='$newdetails'
WHERE webname='$webname' AND webtype='$webtype' ";
        
        mysqli_query($db, $query);
            array_push($success, "تم تعديل البيانات بنجاح"); }
    }else{  
    if (!empty($avatarname) &&!in_array($avatarextension,$avatarallowedextention)) { array_push($errors, "عفوا امتداد الصوره خطأ"); }
    else if ($avatarsize > 2097152 ) { array_push($errors, "عفوا حجم الصوره كبيرأ"); }
    else{if ($count >0){
       
move_uploaded_file($avatartmp,"uploads/avatars/". $avatar);

$query = "UPDATE services 
set webname='$newname' ,
weblink='$newlink',
webtype='$newtype',
webdetails='$newdetails',
avatar='$avatar'
WHERE webname='$webname' AND webtype='$webtype' ";
        
        mysqli_query($db, $query);
            array_push($success, "تم تعديل البيانات بنجاح");
    }
      else {
array_push($errors, "عفواً الموقع غير مسجل لدينا");
  	}   
       
    }
        
  
    
    
  
    }

}


////*/***/*/ search page */*/*//
if(isset($_POST['search2'])){
$webname = $_POST['webname'];

    

    // check if user exixt in data base 
    $stmt =$con->prepare("SELECT * FROM services WHERE webname=? " );
    $stmt->execute(array($webname));
    $row = $stmt->fetch();
    $count = $stmt->rowCount(); 
    
    // if conut > 0 this mean that data base have the user 
    if ($count >0){
       
           array_push($success, "الموقع مسجل يمكنك تعديل البيانات");

    }// 
    else {
array_push($errors, "عفواً الموقع غير مسجل لدينا");
  	}
    
 
}



