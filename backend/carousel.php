<div class="di" style="width:76.5%; margin:2px 0px 0px 0px;">
    <!--正中央-->

    <div style="width:99%; height:87%; margin:auto;" class="mx-auto">
        <h2 class="t cent botli">輪播圖管理</h2>
        <form method="post" action="./api/edit.php">
            <!-- 顯示資料的table     -->
            <table width="100%" class="cent">
                <tbody>
                    <tr>
                        <td width="60%">輪播圖</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                        <td width="20%"></td>
                    </tr>

                    <?php
                    // 每一頁要幾筆
                    $div=3;
                    $total=$Carousel->count();

                    $pages=ceil($total/$div);
                    // 如果沒有GET就是第一頁
                    $now=$_GET['p']??1;

                    // 要從哪一筆開始取資料庫的資料
                    $start=($now-1)*$div;

                    // 從start開始抓，抓div筆
                    $rows=$Carousel->all("limit $start,$div");
                    foreach($rows as $row){
                    ?>

                    <tr>
                        <td>
                            <img src="./upload/<?=$row['img'];?>" style="width:100px;height:68px;">
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?=$row['id'];?>"
                                <?=($row['sh']==1)?'checked':'';?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                        </td>
                        <td>
                            <input type="button" class="btn btn-outline-warning"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/upload_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>&#39;)"
                                value="更換圖片">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <div class="cent">
                <?php
                // < 小於 lt=less than
                // > 大於 gt=great than
                if(($now-1)>0){
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev'> < </a>";
                }
                
                
                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"24px":"16px";
                            echo "<a href='?do=$do&p=$i' style='font-size:$size'> ";
                    echo $i;
                    echo " </a>";
                }
                if(($now+1)<=$pages){
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next'> > </a>";
                }

                ?>


            </div>

            <table style="margin:auto;margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td class="cent">
                            <input type="button" class="btn btn-outline-warning"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                                value="新增輪播圖">
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