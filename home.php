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
<script type="text/javascript">
    var usersRef = database.ref('users');
    var output = document.getElementById("outputRow");
    usersRef.on('child_added', function (data) {
        var driverId = data.key;
        data.forEach(function (child) {
            var key = child.key;
            var driverMail;
            var driverName;
            if (child.key.equals("email")) {
                driverMail = child.val();
            }
            if (child.key.equals("username")) {
                driverName = child.val();
            }
            alert(driverName + driverMail);
            /*var element = "<div class=\"col-md-3 m-b-10\">\
             <div class=\"ar-3-2 widget-1-wrapper\">\
             <div\
             class=\"widget-1 panel no-border bg-complete no-margin widget-loader-circle-lg\">\
             <div class=\"panel-heading top-right \">\
             <div class=\"panel-controls\">\
             <ul>\
             <li><a href=\"userDetails.php\"><i\
             class=\"fa fa-arrow-right\"\
             aria-hidden=\"true\"></i></a>\
             </li>\
             </ul>\
             </div>\
             </div>\
             <div class=\"panel-body\">\
             <div class=\"pull-bottom bottom-left bottom-right \">\
             <span class=\"label font-montserrat fs-11\" id=\"driverId\">" + driverId + "</span>\
             <br>\
             <h2 class=\"text-white\" id=\"driverName\"> " + driverName + " </h2>\
             <p class=\"text-white hint-text\" id=\"driverMail\"> " + driverMail + " </p>\
             </div>\
             </div>\
             </div>\
             </div>\
             </div>";
             output.appendChild(element);*/
        });
    });
</script>
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
                                <div class="row" id="outputRow">
                                    <div class="col-md-3 m-b-10">
                                        <div class="ar-3-2 widget-1-wrapper">
                                            <div
                                                class="widget-1 panel no-border bg-complete no-margin widget-loader-circle-lg">
                                                <div class="panel-heading top-right">
                                                    <div class="panel-controls">
                                                        <ul>
                                                            <li><a href="userDetails.php"><i
                                                                        class="fa fa-arrow-right"
                                                                        aria-hidden="true"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="pull-bottom bottom-left bottom-right ">
                                                        <span class="label font-montserrat fs-11" id="driverId">sda</span>
                                                        <br>

                                                        <h2 class="text-white" id="driverName">dasda</h2>

                                                        <p class="text-white hint-text" id="driverMail">dsadas</p>
                                                    </div>
                                                </div>
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
