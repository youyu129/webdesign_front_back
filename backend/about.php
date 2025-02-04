<div class="di" style="width:100%; margin:2px 0px 0px 0px;">
    <!--正中央-->

    <div style="width:99%; height:87%; margin:auto;" class="mx-auto">
        <h2 class="t cent botli">簡介管理</h2>
        <form method="post" action="./api/update_data.php">
            <?php
            $row=$About->find(1);
            ?>
            <div class="text-center">
                <div class="input-group">
                    <span class="input-group-text">簡介</span>
                    <textarea class="form-control" name="about" style="height:25vh;"
                        aria-label="With textarea"><?=$row['about'];?></textarea>
                </div>
                <div class="mt-3">
                    <img src="upload/<?=$row['img'];?>" style="height:30vh;">
                </div>
            </div>
            <table style="margin:auto;margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="button" class="btn btn-outline-warning"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/upload_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>&#39;)"
                                value="更換圖片">
                            <input type="submit" value="修改確定" class="btn btn-outline-info">
                            <input type="reset" value="重置" class="btn btn-outline-secondary">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>