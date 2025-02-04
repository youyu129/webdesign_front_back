<h3 class="cent">新增輪播圖</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;width:60%;">
        <tr>
            <td>
                <div class="input-group mb-3">
                    <input type="file" name="img" class="form-control">
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