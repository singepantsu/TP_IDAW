<div class="main-page">
    <div class="prem-flex">
        <div class="sec-flex">
            <h1>Contacts but english</h1>
            <div class="prem-flex">
                <?php
                    $image = "Instagram-Embleme.png";
                    $site = "Instagram";  
                    $width = 170;
                    $height = 100;
                    echo "<a href=\"index.php?page=exterieur&lang=EN&site=$site\">"; 
                    echo "<img src=\"".$image."\" width =" . $width . " height =" . $height . "></a>";
                    $image = "logo-rond-twitter.png"; 
                    $site = "Twitter";  
                    $width = 100;
                    $height = 100;
                    echo "<a href=\"index.php?page=exterieur&lang=EN&site=$site\">";
                    echo "<img src=\"".$image."\" width =" . $width . " height =" . $height . "></a>";
                ?>
</div>
            <h3>
                <u>Tel.:</u> 01.23.45.67.89<br>
                <u>Mail:</u><a href="mailto: johndoe@gmail.com"> pigeon@arnaque.org</a>
            </h3>
        </div>
    </div>
</div>