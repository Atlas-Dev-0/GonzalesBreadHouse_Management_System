<?php
$b_restricted_auth      = false;

$s_page_title           = 'About';
$b_page_logo            = true;

require_once '_common.php';
require_once '_header.php';
?>

        <div class="container text_align_center">
            <img src="res/mmex.png" alt="Gonzales Bread House Logo" height="150" width="150"/>
            <br />
            <h3><strong>Internal Error</strong></h3>
            <?php
               echo "<h4> Version ".costant::app_version()."</h4>";
            ?>
            <br />
            <h4>This version of MMEX WebApp is by Gonzales Bread House</h4>
            <h4>Please contact developer Max Dmitriev for the original</h4>
            <a href="https://github.com/moneymanagerex/web-money-manager-ex" target="_blank"><h4> on GitHub WebPage</h4></a>
            <br />
            <br />
        </div>
    
<?php
require_once '_footer.php';
