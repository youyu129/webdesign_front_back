<div class="di" style="width:76.5%; margin:2px 0px 0px 0px;">
    <!--正中央-->

    <div style="width:99%; height:87%; margin:auto;" class="mx-auto">
        <h2 class="t cent botli">簡介管理</h2>
        <form method="post" action="./api/update_data.php">
            <table class="text-center">
                <tr>
                    <td width="50%">簡介</td>
                    <td width="50%">照片</td>

                </tr>
                <tr>
                    <td><textarea name="text" id="text"
                            style="width:90%;height:30vh"><?=$About->find(1)['text'];?></textarea></td>
                    <td><img src="upload/sofa.jpg" class="img-fluid"></td>

                </tr>
                <tr>
                    <td></td>
                    <td><button type="button" class="btn btn-outline-primary"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/upload_<?=$do;?>.php&#39;)">更換圖片</button>
                    </td>
                </tr>
            </table>
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