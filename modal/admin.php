<h3 class="cent">新增管理者帳號</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">

    <table style="margin:auto;width:60%;">
        <tr>
            <td>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="acc" placeholder="帳號">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="input-group mb-3">
                    <input type="password" name="pw" class="form-control" name="acc" placeholder="密碼">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="input-group mb-3">
                    <input type="password" name="pw2" class="form-control" name="acc" placeholder="確認密碼">
                </div>
            </td>
        </tr>
    </table>

    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增" class="btn btn-outline-warning">
        <input type="reset" value="重置" class="btn btn-outline-secondary">
    </div>
</form>