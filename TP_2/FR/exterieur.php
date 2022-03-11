<div class="main-page">
    <div class="prem-flex">
        <div class="sec-flex">
            <?php
            $currentSite = "Triche pas stp";
            if(isset($_GET['site'])) {
                $currentSite = $_GET['site'];
            }
                echo "<h2> J'ai pas $currentSite mais merci du soutien!<h2>";
                echo "<a href=\"index.php?page=contact&lang=FR\">Revenir aux contacts</a>";
                ?>
        </div>
    </div>
</div>