<?php
    function renderMenuToHTML($currentPageId, $currentLang) {
        // un tableau qui définit la structure du site
        $mymenu = array(
        // idPage titre
            'accueil' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'projets' => array('Mes Projets'),
            'contact' => array('Contact us')
            );
        // ...
        echo "<div class=\"overlay\">";
        echo "<div class=\"prem-flex\">";
        echo "<input id = \"schnoz\" type = \"image\" src=\"schnoz.jpg\"/>";
        echo "</div>";
        echo "<div class=\"prem-flex\">";
        if ($currentLang=="FR")
            echo "<h4><u>Bienvenue sur mon site personnel</u></h4>";
        else{
            echo "<h4><u>Welcome To my personal site</u></h4>"; 
        }
        echo "</div>";
        echo "<nav class=\"menu\"><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a href=\"index.php?page=$pageId&lang=$currentLang\">".$pageParameters[0]."</a></li>"; 
        }
        echo "</ul></nav>";
        echo "<nav class=\"menu\"><ul>";
        echo "<li><a href=\"index.php?page=$currentPageId&lang=FR\">fr</a></li>";
        echo "<li><a href=\"index.php?page=$currentPageId&lang=EN\">en</a></li>";
        echo "</ul></nav>";
        echo "</div>";
    // ...
    }
?>
