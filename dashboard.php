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
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content">

            <!-- START CONTAINER FLUID -->
            <div class="container-fluid container-fixed-lg">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->

                <div class="page-container no-padding ">
                    <!-- START PAGE CONTENT WRAPPER -->
                    <div class="page-content-wrapper container-xs-height">
                        <!-- START PAGE CONTENT -->
                        <div class="content sm-gutter no-padding col-xs-height col-middle">
                            <!-- START CONTAINER FLUID -->
                            <div class="container-fluid padding-25 sm-padding-10">
                                <!-- START ROW -->
                                <div class="row">
                                    <div class="col-md-12 m-b-10">


                                        <div class="widget-13 panel no-border  no-margin widget-loader-circle">
                                            <div class="panel-heading pull-up top-right ">
                                                <div class="panel-controls">
                                                    <ul>
                                                        <li><a href="#" class="portlet-refresh text-black"
                                                               data-toggle="refresh"><i
                                                                    class="portlet-icon portlet-icon-refresh"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="container-sm-height no-overflow">
                                                <div class="row row-sm-height">
                                                    <div
                                                        class="col-sm-5 col-lg-4 col-xlg-3 col-sm-height col-top no-padding">
                                                        <div class="panel-heading ">
                                                            <div class="panel-title">
                                                                Locate on Map
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="tab-content">
                                                                <div style="padding-left: 5%" class="tab-pane active"
                                                                     id="tab1">
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
                                                    <div
                                                        class="col-sm-7 col-lg-8 col-xlg-9 col-sm-height col-top no-padding relative">
                                                        <div id="map" class="bg-success widget-13-map">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END ROW -->
                                <!-- START ROW -->
                                <div class="row">
                                    <div class="col-md-12 m-b-10">
                                        <div
                                            class="widget-pie-chart panel panel-condensed  no-margin no-border widget-loader-circle">
                                            <div class="panel-heading">
                                                <div class="panel-controls">
                                                    <ul>
                                                        <li><a href="#" class="portlet-refresh text-black"
                                                               data-toggle="refresh"><i
                                                                    class="portlet-icon portlet-icon-refresh"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-l-30 p-r-30">
                                                <h2 class="text-complete no-margin inline bold">Riders
                                                    Classification</h2>

                                                <p class="hint-text small">From overall activities</p>
                                            </div>
                                            <div class="panel-body">
                                                <div id="nvd3-pie" class="text-center m-b-30">
                                                    <svg style="width:400px;height:200px; margin:0 auto"></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END ROW -->
                                <!-- START ROW -->
                                <div class="row">
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                <!-- END ROW -->
                                <br/>
                                <!-- START ROW -->
                                <div class="row">
                                    <div class="col-md-6 m-b-10">
                                        <div class="panel no-border panel-default no-margin widget-loader-circle">
                                            <div class="panel-heading p-l-30 p-t-30 p-r-30">
                                                <div class="pull-left">
                                                    <div class="panel-title">Safe Riders Ranking
                                                    </div>
                                                </div>
                                                <div class="input-prepend input-group pull-right col-sm-4">
                                                    <input type="text" style="width: 100%" name="reservation" id="rankingDatepicker" class="form-control" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM" />
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="p-l-30 p-r-30 p-b-30">
                                                <table class="table table-hover " id="rankingTable1">
                                                    <thead>
                                                    <tr>
                                                        <th class="hint-text fs-11 col-xs-5">Keyword</th>
                                                        <th class="hint-text fs-11">Avg Speed</th>
                                                        <th class="hint-text fs-11">Current Rank</th>
                                                        <th class="hint-text fs-11">Rank change</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="v-align-middle">
                                                            <p>S. Rajat Bhatia</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>64.8</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>1</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>2 <i class="pg-arrow_up text-success"></i></p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="v-align-middle">
                                                            <p>L. Ramana</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>62.8</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>2</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>1 <i class="pg-arrow_down text-danger"></i></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="v-align-middle">
                                                            <p>R. Bahadur</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>61.5</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>3</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>4 <i class="pg-arrow_up text-success"></i></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="v-align-middle">
                                                            <p>S. Mahendra Rana</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>59.7</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>4</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>2 <i class="pg-arrow_down text-success"></i></p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6 m-b-10">
                                        <div class="panel no-border panel-default no-margin widget-loader-circle">
                                            <div class="panel-heading p-l-30 p-t-30 p-r-30">
                                                <div class="pull-left">
                                                    <div class="panel-title">Unsafe Riders Ranking
                                                    </div>
                                                </div>
                                                <div class="input-prepend input-group pull-right col-sm-4">
                                                    <input type="text" style="width: 100%" name="reservation" id="rankingDatepicker" class="form-control" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM" />
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="p-l-30 p-r-30 p-b-30">
                                                <table class="table table-hover " id="rankingTable2">
                                                    <thead>
                                                    <tr>
                                                        <th class="hint-text fs-11 col-xs-5">Keyword</th>
                                                        <th class="hint-text fs-11">Avg Speed</th>
                                                        <th class="hint-text fs-11">Current Rank</th>
                                                        <th class="hint-text fs-11">Rank change</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="v-align-middle">
                                                            <p>S. Rajat Bhatia</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>64.8</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>1</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>2 <i class="pg-arrow_up text-success"></i></p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="v-align-middle">
                                                            <p>L. Ramana</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>62.8</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>2</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>1 <i class="pg-arrow_down text-danger"></i></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="v-align-middle">
                                                            <p>R. Bahadur</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>61.5</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>3</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>4 <i class="pg-arrow_up text-success"></i></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="v-align-middle">
                                                            <p>S. Mahendra Rana</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>59.7</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>4</p>
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <p>2 <i class="pg-arrow_down text-success"></i></p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- END ROW -->
                            </div>
                        </div>
                    </div>
                </div>


                <!-- END PLACE PAGE CONTENT HERE -->
            </div>
            <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->

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
