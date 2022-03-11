<div class="main-page">
    <div class="prem-flex">
        <div class="sec-flex">
            <?php
            $currentSite = "Don't cheat stp";
            if(isset($_GET['site'])) {
                $currentSite = $_GET['site'];
            }
                echo "<h2> Don't have $currentSite but merci du soutien!<h2>";
                echo "<a href=\"index.php?page=contact&lang=EN\">Revenir aux contacts</a>";
                ?>
        </div>
    </div>
</div>