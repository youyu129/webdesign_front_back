<div class="di" style="width:76.5%; margin:2px 0px 0px 0px;">
    <!--正中央-->

    <div style="width:99%; height:87%; margin:auto;" class="mx-auto">
        <h2 class="t cent botli">簡介管理</h2>
        <form method="post" action="./api/update_data.php">
            <div class="mx-auto text-center">
                <div class="input-group">
                    <span class="input-group-text">簡介</span>
                    <textarea class="form-control" style="height:30vh;"
                        aria-label="With textarea"><?=$About->find(1)['text'];?></textarea>
                </div>
                <div class="mt-3">
                    <img src="upload/sofa.jpg" style="height:30vh;">
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary"
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/upload_<?=$do;?>.php&#39;)">更換圖片</button>
                </div>
            </div>
    </div>

    <table style="margin:auto;margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td class="cent">
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <input type="hidden" name="id" value="<?=$About->find(1)['id'];?>">
                    <input type="submit" value="修改確定" class="btn btn-success">
                    <input type="reset" value="重置" class="btn btn-secondary">
                </td>
            </tr>
        </tbody>
    </table>

    </form>
</div>
</div>