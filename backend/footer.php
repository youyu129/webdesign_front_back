<div class="di" style="width:76.5%; margin:2px 0px 0px 0px;">
    <!--正中央-->

    <div style="width:99%; height:87%; margin:auto;" class="mx-auto">
        <h2 class="t cent botli">頁尾版權管理</h2>
        <form method="post" action="./api/update_data.php">
            <div class="container text-center ">
                <div class="row">
                    <div class="col-sm-12">
                        <p>頁尾版權</p>
                        <input type="text" name="footer" value="<?=$Footer->find(1)['text'];?>" style="width:80%;"
                            class="text-center">
                    </div>
                </div>
            </div>
    </div>

    <table style="margin:auto;margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td class="cent">
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <input type="hidden" name="id" value="<?=$Footer->find(1)['id'];?>">
                    <input type="submit" value="修改確定" class="btn btn-outline-info">
                    <input type="reset" value="重置" class="btn btn-outline-secondary">
                </td>
            </tr>
        </tbody>
    </table>

    </form>
</div>
</div>