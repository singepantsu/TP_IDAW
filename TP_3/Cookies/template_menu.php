<div class=overlay>
<?php
if (isset($_GET['deco'])){
session_unset();
session_destroy();
unset($_GET['deco']);
}
        // un tableau qui définit la structure du site
        $mymenu = array(
        // idPage titre
            'test1' => array( 'test1' ),
            'test2' => array( 'test2' ),
            );
        // ...
        echo "<nav class=\"menu\"><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a href=\"connected.php?page=$pageId\">".$pageParameters[0]."</a></li>"; 
        }
        echo "</ul></nav>";
        echo "<a href='index.php?deco'>Deconnexion</a>";
        //echo "<input id='deco' type=button value='deconnecter' oncl>"
?>
</div>
