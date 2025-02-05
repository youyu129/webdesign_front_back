<div class="di mx-auto w-100">
    <div style="height:32px; display:block;"></div>
    <!--正中央-->
    <form method="post" action="./api/login.php">
        <div class="text-center">
            <p class="t botli">管理員登入區</p>
        </div>
        <table class="w-75 mx-auto">
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