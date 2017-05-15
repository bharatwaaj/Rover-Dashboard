<?php
/**
 * Created by PhpStorm.
 * User: Bharatwaaj
 * Date: 31-01-2017
 * Time: 20:02
 */
?>

<?php
include 'loginCheck.php';
?>
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar" data-pages="sidebar">
    <div id="appMenu" class="sidebar-overlay-slide from-top">
    </div>
    <!-- BEGIN SIDEBAR HEADER -->
    <div class="sidebar-header">
        <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png"
             data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">

        <div class="sidebar-header-controls">
            <button data-pages-toggle="#appMenu" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" type="button">
                <i class="fa fa-angle-down fs-16"></i>
            </button>
            <button data-toggle-pin="sidebar" class="btn btn-link visible-lg-inline" type="button"><i
                    class="fa fs-12"></i>
            </button>
        </div>
    </div>
    <!-- END SIDEBAR HEADER -->
    <!-- BEGIN SIDEBAR MENU -->
    <div class="sidebar-menu">
        <ul class="menu-items">
            <br/>
            <li class="">
                <a href="home.php">
                    <span class="title">Dashboard</span>
                </a>
                <span class="icon-thumbnail"><i class="pg-desktop"></i></span>
            </li>
            <li class="">
                <a href="analytics.php">
                    <span class="title">Analytics</span>
                </a>
                <span class="icon-thumbnail "><i class="pg-charts"></i></span>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
