<?php

$b_restricted_auth      = false;
$b_page_logo            = true;

require_once '_common.php';
require_once '_header.php';
?>

<div class="container text_align_center">

    <h4> Gonzales Bread House Management System  -  by Kenneth Gonzales </h4>
   <h5>This is only A fork of web mmx to provide my personal business a way to access desktop version of mmx</h4> 
    <br />
        <h4>Real Developers: </h4>

            <h5>
                developer 2021<?php if (date("y") > 2021) { echo '&nbsp;&mdash;&nbsp' . date("y"); 
                              } ?>:
                <a href="https://github.com/maksimdzmitryew" target="_blank">maksim dzmitryew̆</a>
            </h5>
            <h5>Developer 2014 &mdash; 2016: Gabriele [Gabriele-V]</h5>
            <h4><a href="https://github.com/moneymanagerex/web-money-manager-ex" target="_blank">WebApp&rsquo;s GitHub</a></h4>
            <br />
            <p>
                Used components:
                <br />
                <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>
                <br />
                <a href="https://jquery.com/" target="_blank">jQuery</a>
                <br />
                <a href="https://modernizr.com/" target="_blank">Modernizr</a>
                <br />
                <a href="https://www.sqlite.org/" target="_blank">SQLite</a>
                <br />
                <a href="https://twitter.github.io/typeahead.js/" target="_blank">Twitter's typeahead</a>
            </p>
            <img src="res/html5.png" alt="HTML5 Logo" height="100" width="100"/>
        </div>
        
<?php
require_once '_footer.php';
