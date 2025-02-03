<div class="di" style="height:540px; width:76.5%; margin:2px 0px 0px 0px;">
    <!--正中央-->

    <div style="width:99%; height:87%; margin:auto; overflow:auto;" class="mx-auto">
        <h2 class="t cent botli">輪播圖管理</h2>
        <form method="post" action="./api/edit.php">
            <!-- 顯示資料的table     -->
            <table width="100%" class="text-center">
                <tbody>
                    <tr style="background-color: #fcbf9e;">
                        <td width="60%">圖片</td>
                        <td width="20%">顯示</td>
                        <td width="20%">刪除</td>
                    </tr>
                    <tr>

                        <td>
                            <textarea name="text" id="text"
                                style="width:90%;height:30vh"><?=$About->find(1)['text'];?></textarea>
                        </td>
                        <td>
                            <img src="https://picsum.photos/300/200/?random=10">
                        </td>
                    </tr>


                </tbody>
            </table>
            <table style="margin:auto;margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" value="修改確定">
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>