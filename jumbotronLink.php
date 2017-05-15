<?php
/**
 * Created by PhpStorm.
 * User: Bharatwaaj
 * Date: 31-01-2017
 * Time: 20:05
 */
?>

<!-- START JUMBOTRON -->
<div class="jumbotron" data-pages="parallax">
    <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
        <div class="inner">
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li>
                    <p>Quiz</p>
                </li>
                <li>
                    <a href="#" class="active">
                        <?php
                        if (isset($_COOKIE[$cookie_breadcrumb_set_name])) {
                            echo $_COOKIE[$cookie_breadcrumb_set_name];
                        }
                        ?>
                    </a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->
        </div>
    </div>
</div>
<!-- END JUMBOTRON -->
