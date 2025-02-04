<div class="di" style="width:100%; margin:2px 0px 0px 0px;">
    <!--正中央-->

    <div style="width:99%; height:87%; margin:auto;" class="mx-auto">
        <h2 class="t cent botli">頁尾版權管理</h2>
        <form method="post" action="./api/update_data.php">
            <div class="input-group mt-5" style="width:70%;margin:auto">
                <span class="input-group-text">頁尾版權</span>
                <input class="form-control" type="text" name="footer" value="<?=$Footer->find(1)['footer'];?>">
            </div>

            </tbody>
            </table>
            <table style="margin:auto;margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" value="修改確定" class="btn btn-outline-info">
                            <input type="reset" value="重置" class="btn btn-outline-secondary">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>