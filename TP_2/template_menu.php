<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
        // idPage titre
            'accueil' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'projets' => array('Mes Projets'),
            'contact' => array('Contact us')
            );
        // ...
        echo "<div class=\"overlay\">";
        echo "<nav class=\"menu\"><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            //echo "<li><a href=\"$pageId.php\">".$pageParameters[0]."</a></li>";
            echo "<li><a href=\"index.php?page=$pageId>\">".$pageParameters[0]."</a></li>"; 
        }
        echo "</ul></nav>";
        echo "</div>";
    // ...
    }
?>