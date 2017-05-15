<?php
/**
 * Created by PhpStorm.
 * User: Bharatwaaj
 * Date: 31-01-2017
 * Time: 21:11
 */

include 'loginCheck.php';

include 'databaseConnectivity.php';
?>

<!DOCTYPE html>
<html>
<?php
include 'headLink.php';
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/atoms-quiz.css"/>
</head>
<body class="fixed-header">

<!-- START PAGE HEADER WRAPPER LINK PHP -->
<?php
include 'pageHeaderWrapperLink.php';
?>
<!-- END PAGE HEADER WRAPPER LINK PHP -->

<!-- START SIDEBAR -->
<?php
include 'sidebarLink.php';
?>
<!-- END SIDEBAR -->

<!-- START PAGE-CONTAINER -->
<div class="page-container">
    <!-- START SOCIAL WRAPPER -->
    <div class="social-wrapper">
        <!-- START SOCIAL -->
        <div class="social " data-pages="social">
            <!-- START SOCIAL COVER -->
            <div class="jumbotron" data-pages="parallax" data-social="cover">
                <!-- START COVER PHOTO -->
                <div class="cover-photo">
                    <img alt="Cover photo" src="assets/img/social/cover.png"/>
                </div>
                <!-- END COVER PHOTO -->
                <!-- START COVER PHOTO INNER -->
                <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                    <div class="inner">
                        <div class="pull-bottom bottom-left m-b-40">
                            <h5 class="text-white no-margin">User Id</h5>

                            <h1 class="text-white no-margin"><span class="semi-bold">User</span> name</h1>
                        </div>
                    </div>
                </div>
                <!-- END COVER PHOTO INNER -->
            </div>
            <!-- END SOCIAL COVER -->

            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                <div class="feed">
                    <!-- START DAY -->
                    <div class="day" data-social="day">
                        <div class="container-fluid p-t-30 p-b-30 ">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="container-xs-height">
                                        <div class="row-xs-height">
                                            <div class="social-user-profile col-xs-height text-center col-top">
                                                <div class="thumbnail-wrapper d48 circular bordered b-white">
                                                    <img alt="Avatar"
                                                         data-src-retina="assets/img/profiles/avatar_small2x.jpg"
                                                         data-src="assets/img/profiles/avatar.jpg"
                                                         src="assets/img/profiles/avatar.jpg" width="55" height="55">
                                                </div>
                                                <br>
                                                <i class="fa fa-check-circle text-success fs-16 m-t-10"></i>
                                            </div>
                                            <div class="col-xs-height p-l-20">
                                                <h3 class="no-margin">Driver Name</h3>
                                                <br/>

                                                <p class="no-margin fs-16">License : C8RTU12PO</p>

                                                <p class="hint-text m-t-5 small">raj_1985@gmail.com | 81204 59302</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget-9 panel no-border bg-success no-margin widget-loader-bar">
                                        <div class="container-xs-height full-height">
                                            <div class="row-xs-height">
                                                <div class="col-xs-height col-top">
                                                    <div class="panel-heading  top-left top-right">
                                                        <div class="panel-title text-white">
                                <span class="font-montserrat fs-11 all-caps">Average Speed
                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-xs-height">
                                                <div class="col-xs-height col-top">
                                                    <div class="p-l-20 p-t-15">
                                                        <h3 class="no-margin p-b-5 text-white">38.56 Kmph</h3>
                                                        <i class="pg-arrow_maximize"></i>
                                                        <span class="small hint-text">15% higher than last month</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-xs-height">
                                                <div class="col-xs-height col-bottom">
                                                    <div class="progress progress-small m-b-20">
                                                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                        <div class="progress-bar progress-bar-white"
                                                             style="width:89%"></div>
                                                        <!-- END BOOTSTRAP PROGRESS -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget-9 panel no-border bg-success no-margin widget-loader-bar">
                                        <div class="container-xs-height full-height">
                                            <div class="row-xs-height">
                                                <div class="col-xs-height col-top">
                                                    <div class="panel-heading  top-left top-right">
                                                        <div class="panel-title text-white">
                                <span class="font-montserrat fs-11 all-caps">Max Speed
                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-xs-height">
                                                <div class="col-xs-height col-top">
                                                    <div class="p-l-20 p-t-15">
                                                        <h3 class="no-margin p-b-5 text-white">39.27 Kmph</h3>
                                                        <i class="pg-arrow_maximize"></i>
                                                        <span class="small hint-text">5% higher than last month</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-xs-height">
                                                <div class="col-xs-height col-bottom">
                                                    <div class="progress progress-small m-b-20">
                                                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                        <div class="progress-bar progress-bar-white"
                                                             style="width:95%"></div>
                                                        <!-- END BOOTSTRAP PROGRESS -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget-9 panel no-border bg-success no-margin widget-loader-bar">
                                        <div class="container-xs-height full-height">
                                            <div class="row-xs-height">
                                                <div class="col-xs-height col-top">
                                                    <div class="panel-heading  top-left top-right">
                                                        <div class="panel-title text-white">
                                <span class="font-montserrat fs-11 all-caps">Distance
                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-xs-height">
                                                <div class="col-xs-height col-top">
                                                    <div class="p-l-20 p-t-15">
                                                        <h3 class="no-margin p-b-5 text-white">2150 Kms</h3>
                                                        <i class="pg-arrow_minimize"></i>
                                                        <span class="small hint-text">35% lower than last month</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-xs-height">
                                                <div class="col-xs-height col-bottom">
                                                    <div class="progress progress-small m-b-20">
                                                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                        <div class="progress-bar progress-bar-white"
                                                             style="width:75%"></div>
                                                        <!-- END BOOTSTRAP PROGRESS -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END DAY -->
                </div>
                <!-- END FEED -->
                <!-- START ROW -->
                <div class="row">
                    <div class="col-md-12 m-b-10">

                        <div class="widget-14 panel no-border  no-margin widget-loader-circle">
                            <div class="container-xs-height full-height">
                                <div class="row-xs-height">
                                    <div class="col-xs-height">
                                        <div class="panel-heading">
                                            <div class="panel-title">CURRENT SPEED MONITOR
                                            </div>
                                            <div class="panel-controls">
                                                <ul>
                                                    <li><a href="#" class="portlet-refresh text-black"
                                                           data-toggle="refresh"><i
                                                                class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height">
                                        <div class="p-l-20 p-r-20">
                                            <p>Alert Level : <span class="text-danger">Moderate</span></p>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-12">
                                                    <h4 class="bold no-margin">390.57 Kms</h4>

                                                    <p class="small no-margin">Total Distance</p>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <h5 class=" no-margin bold">38.57 Kmph</h5>

                                                    <p class="small no-margin">Current Speed</p>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <h5 class=" no-margin bold">38.40 Kmph</h5>

                                                    <p class="small no-margin">Average</p>
                                                </div>
                                                <div class="col-lg-3 visible-xlg">
                                                    <div
                                                        class="widget-14-chart-legend bg-transparent text-black no-padding pull-right"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height relative bg-master-lightest">
                                        <div class="widget-14-chart_y_axis"></div>
                                        <div
                                            class="widget-14-chart rickshaw-chart top-left top-right bottom-left bottom-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END ROW -->
                <br/>
                <!-- START ROW -->
                <div class="row">
                    <div class="col-md-12 m-b-10">


                        <div class="widget-13 panel no-border  no-margin widget-loader-circle">
                            <div class="panel-heading pull-up top-right ">
                                <div class="panel-controls">
                                    <ul>
                                        <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i
                                                    class="portlet-icon portlet-icon-refresh"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="container-sm-height no-overflow">
                                <div class="row row-sm-height">
                                    <div class="col-sm-5 col-lg-4 col-xlg-3 col-sm-height col-top no-padding">
                                        <div class="panel-heading ">
                                            <div class="panel-title">
                                                Locate on Map
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div style="padding-left: 5%" class="tab-pane active" id="tab1">
                                                    <h3>Current Location</h3>

                                                    <p class="hint-text all-caps font-montserrat small no-margin ">
                                                        Road Name</p>

                                                    <p class="all-caps font-montserrat  no-margin text-success ">
                                                        Gangapur Road</p>
                                                    <br>

                                                    <p class="hint-text all-caps font-montserrat small no-margin ">
                                                        Area</p>

                                                    <p class="all-caps font-montserrat  no-margin text-warning ">
                                                        Vadodhara Circle</p>
                                                    <br>

                                                    <p class="hint-text all-caps font-montserrat small no-margin ">
                                                        Time</p>

                                                    <p class="all-caps font-montserrat  no-margin text-success ">
                                                        15:55 </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-lg-8 col-xlg-9 col-sm-height col-top no-padding relative">
                                        <div id="map" class="bg-success widget-13-map">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ROW -->
            </div>
            <!-- END CONTAINER FLUID -->
        </div>
        <!-- END SOCIAL -->
        <br/>
        <br/>
        <br/>
        <!-- START FOOTER LINK PHP -->
        <?php
        include 'footerLink.php';
        ?>
        <!-- END FOOTER LINK PHP -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->
<?php
include 'bodyLink.php';
?>
</body>
</html>
