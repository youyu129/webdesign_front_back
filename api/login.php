<?php
include_once "db.php";
?>

<?php
if(isset($_SESSION['login'])){
	to("../admin.php");
	// exit();	
}

if(isset($_POST['acc'])){
    $row=$Admin->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

    if(!empty($row)){
       $_SESSION['login']=1;
       to("../admin.php");
    }else{
       echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}
?>