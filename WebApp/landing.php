<?php
$b_restricted_auth      = true;
require_once '_common.php';

$s_page_title           = '';
$b_page_logo            = true;
require_once '_header.php';

$pages_list = various::getPagesList();

?>
        <div class="container text_align_center">
<?php
foreach ($pages_list AS $page_url => $page_name):
    ?>
                <head>
                <style>
                        .btn-landing {
            background-color: #7d6928 !important; /* Dark cream color */
            color: #ffff !important; /* White text color */
            border: none; /* Optional: Remove border if needed */
        }

        .btn-landing:hover {
            background-color: #b8a74d !important; /* Lighter cream color on hover */
            color: #fff !important; /* Ensure text remains white */
                                        }
                        </style>

                </head>
            <div class="div_btn">
                <a href="<?php echo $page_url ?>.php" class="btn btn-lg btn-landing btn-block" style="font-weight: bold;"><?php
                echo $page_name
                ?></a>
            </div>
    <?php
endforeach;

require_once '_btn_logout.php';

?>
        </div>
<?php

require_once '_footer.php';
