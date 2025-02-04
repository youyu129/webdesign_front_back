<h3 class="cent">更新簡介圖片</h3>
<hr>
<form action="api/update.php" method="post" enctype="multipart/form-data">

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
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="更新" class="btn btn-outline-info">
        <input type="reset" value="重置" class="btn btn-outline-secondary">
    </div>
</form>