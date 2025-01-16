<div class="di"
    style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <!--正中央-->
    <table width="100%">
        <?php
    include_once "logout.php";
    ?>
        <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
            <p class="t cent botli">校園映像資料管理</p>
            <form method="post" action="./api/edit.php">
                <!-- 顯示資料的table     -->
                <table width="100%" class="cent">
                    <tbody>
                        <tr class="yel">
                            <td width="70%">校園映像資料圖片</td>
                            <td width="10%">顯示</td>
                            <td width="10%">刪除</td>
                            <td></td>
                        </tr>

                        <?php
                    // 每一頁要幾筆
                    $div=3;
                    $total=$Image->count();

                    $pages=ceil($total/$div);
                    // 如果沒有GET就是第一頁
                    $now=$_GET['p']??1;

                    // 要從哪一筆開始取資料庫的資料
                    $start=($now-1)*$div;

                    // 從start開始抓，抓div筆
                    $rows=$Image->all("limit $start,$div");
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
                                <input type="button"
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

                <table style="margin-top:40px; width:70%;">
                    <tbody>
                        <tr>
                            <td width="200px">
                                <input type="button"
                                    onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                                    value="新增校園映像圖片">
                            </td>
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