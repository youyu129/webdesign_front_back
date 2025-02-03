<div class="di" style="height:540px; width:76.5%; margin:2px 0px 0px 0px;">
    <!--正中央-->

    <div style="width:99%; height:87%; margin:auto; overflow:auto;" class="mx-auto">
        <h2 class="t cent botli">版權頁尾管理</h2>
        <form method="post" action="./api/edit.php">
            <!-- 顯示資料的table     -->
            <table width="100%" class="text-center">
                <tbody>
                    <tr>
                        <td style="background-color: #fcbf9e;" width="50%">頁尾版權</td>
                        <td width="50%">照片</td>
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