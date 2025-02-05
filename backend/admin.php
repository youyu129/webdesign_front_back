<div class="di" style="width:100%; margin:2px 0px 0px 0px;">
    <!--正中央-->

    <div style="width:99%; height:87%; margin:auto;" class="mx-auto">
        <h2 class="t cent botli">帳號管理</h2>
        <form method="post" action="./api/edit.php">
            <!-- 顯示資料的table     -->

            <table width="70%" class="text-center mx-auto">
                <thead>
                    <th width="40%"></th>
                    <th width="40%"></th>
                    <th width="20%">刪除</th>
                </thead>
                <tbody>
                    <?php
                    $rows=$Admin->all();
                    foreach($rows as $row){
                        // 隱藏admin的帳密，不讓人從後台修改
                        if($row['acc']!='admin'){
                    ?>
                    <tr>
                        <td>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">帳號</span>
                                <input class="form-control" type="text" name="acc[]" value="<?=$row['acc'];?>">
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">密碼</span>
                                <input type="password" class="form-control" name="pw[]" value="<?=$row['pw'];?>">
                            </div>
                        </td>
                        <td class="text-center">
                            <input class="form-check-input" input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            <table style="margin:auto;margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td class="cent">
                            <input type="button" class="btn btn-outline-warning"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                                value="新增管理者帳號">
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