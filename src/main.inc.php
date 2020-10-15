<main>
    <div class="section" role="table" aria-label="table-info">
        <table>
            <caption>Le top 10 des langages</caption>
            <thead>
                <tr>
                    <th role="columnheader">Classement</th>
                    <th>Langage</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    include_once('./src/var.inc.php');
                    for($i = 0; $i < 4; $i++){
                        echo"<tr>";
                        for($j = 0; $j < 3; $j++){
                            echo "<td>".$tableau[$i][$j]."</td>";
                        }
                        echo"</tr>";
                    };
                ?>
            </tbody>
            <tfoot>
                    <tr>
                        <th>Classement</th>
                        <th>Langage</th>
                        <th>Type</th>
                    </tr>
            </tfoot>
        </table>

    </div>
    <?php include_once('./src/footer.inc.php');?>
</main>