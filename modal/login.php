<?php
include_once "../api/db.php";
?>

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
    $row=$Admin->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

    if(!empty($row)){
       $_SESSION['login']=1;
       to("../admin.php");
    }else{
       echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}
?>

<div class="di mx-auto">
    <div style="height:32px; display:block;"></div>
    <!--正中央-->
    <form method="post" action="?do=login">
        <div class="text-center">
            <p class="t botli">管理員登入區</p>
        </div>
        <table>
            <tr>
                <td>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">帳號</span>
                        <input class="form-control" type="text" name="acc">
                    </div>
                </td>
                <td>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">密碼</span>
                        <input type="password" class="form-control" name="pw">
                    </div>
                </td>
            </tr>
            <tr>

                <td colspan=2 class="text-center">
                    <input value="送出" type="submit">
                    <input type="reset" value="清除">
                </td>
            </tr>
        </table>
    </form>