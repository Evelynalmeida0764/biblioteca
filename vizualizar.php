<?php
    $sql = "SELECT * FROM livros WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>
<div class="hstack " action="?page=salvar" method="POST" break>
    <input type="hidden" name ="acao" value="vizualizar">
    <input type="hidden" name ="id" value="<?php print $row->id;?>">
    <?php print "<h1 class=\"me-5 \">".$row->nome."</h1>" ?>
    <?php print "<h3 class=\"ms-5 \">".$row->tipo."</h3>" ?>
    <div>
        <?php print "<h3>Link:</h3>" ?>
        <?php print "<a href=".$row->link.">".$row->link."</a>"?>
    </div>
</div>

   
