<!-- 考試快速做法 -->
<?php
// if(isset($_POST['acc'])){
    // if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    //    $_SESSION['login']=1;
    //    to("admin.php");
    // }else{
    //    echo "<script>alert('帳號或密碼錯誤')</script>";
    // }
// }
?>

<!-- 正確做法 -->
<?php
if(isset($_SESSION['login'])){
	to("admin.php");
	exit();	
}

if(isset($_POST['acc'])){
    $row=$Admin->find(['acc'=>$_POST['acc'],'pw'=>$_POST['ps']]);

    if(!empty($row)){
       $_SESSION['login']=1;
       to("admin.php");
    }else{
       echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}
?>

<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
    </marquee>
    <div style="height:32px; display:block;"></div>
    <!--正中央-->
    <!-- 刪除 target="back" -->
    <form method="post" action="?do=login">
        <p class="t botli">管理員登入區</p>
        <p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
        <p class="cent">密碼 ： <input name="ps" type="password"></p>
        <p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
    </form>
</div>