<div class="result_symbol">
    <h3><b>検索結果</b></h3>
    <!--Result-->
        <table border="2">
            <tr><td>所在地</td><td>記号</td><td>法人番号</td><td>製造者名</td><td>製造者所在地</td></tr>
                <?php
                    if($rows){
                        echo count($rows)."件ヒットしました";
                    }else{
                        echo "該当データは存在しません";
                    }
                ?>
                <?php foreach($rows as $row) { ?>
                    <tr>
                        <td><?=htmlspecialchars($row['prefecture'],ENT_QUOTES,'UTF-8')?></td>
                        <td><?=htmlspecialchars($row['symbol'],ENT_QUOTES,'UTF-8')?></td>
                        <td><?=htmlspecialchars($row['number'],ENT_QUOTES,'UTF-8')?></td>
                        <td><?=htmlspecialchars($row['maker_name'],ENT_QUOTES,'UTF-8')?></td>
                        <td><a href="https://www.google.com/maps/place/<?= $row['maker_address']?>"><?=htmlspecialchars($row['maker_address'],ENT_QUOTES,'UTF-8')?></a></td>
                    </tr>
                <?php } ?>
                <!--Error_Count-->
                <?php if(count($sy_errors) > 0): ?>
                    <?php
                        foreach($sy_errors as $sy_value){
                            if(isset($sy_value)){
                                echo "<p>".$sy_value."</p>";
                            }
                        }
                    ?>
                <?php endif ?>
</div>