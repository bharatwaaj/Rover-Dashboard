
<!-- BEGIN MAPS JS -->
<script>
    function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: uluru,
            styles: [{
            featureType: 'water',
            elementType: 'all',
            stylers: [{
                hue: '#e9ebed'
            }, {
                saturation: -78
            }, {
                lightness: 67
            }, {
                visibility: 'simplified'
            }]
        }, {
            featureType: 'landscape',
            elementType: 'all',
            stylers: [{
                hue: '#ffffff'
            }, {
                saturation: -100
            }, {
                lightness: 100
            }, {
                visibility: 'simplified'
            }]
        }, {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{
                hue: '#bbc0c4'
            }, {
                saturation: -93
            }, {
                lightness: 31
            }, {
                visibility: 'simplified'
            }]
        }, {
            featureType: 'poi',
            elementType: 'all',
            stylers: [{
                hue: '#ffffff'
            }, {
                saturation: -100
            }, {
                lightness: 100
            }, {
                visibility: 'off'
            }]
        }, {
            featureType: 'road.local',
            elementType: 'geometry',
            stylers: [{
                hue: '#e9ebed'
            }, {
                saturation: -90
            }, {
                lightness: -8
            }, {
                visibility: 'simplified'
            }]
        }, {
            featureType: 'transit',
            elementType: 'all',
            stylers: [{
                hue: '#e9ebed'
            }, {
                saturation: 10
            }, {
                lightness: 69
            }, {
                visibility: 'on'
            }]
        }, {
            featureType: 'administrative.locality',
            elementType: 'all',
            stylers: [{
                hue: '#2c2e33'
            }, {
                saturation: 7
            }, {
                lightness: 19
            }, {
                visibility: 'on'
            }]
        }, {
            featureType: 'road',
            elementType: 'labels',
            stylers: [{
                hue: '#bbc0c4'
            }, {
                saturation: -93
            }, {
                lightness: 31
            }, {
                visibility: 'on'
            }]
        }, {
            featureType: 'road.arterial',
            elementType: 'labels',
            stylers: [{
                hue: '#bbc0c4'
            }, {
                saturation: -93
            }, {
                lightness: -2
            }, {
                visibility: 'simplified'
            }]
        }]
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefuQGocsWfi0UuZYNgVrR35R-IMJP1D0&callback=initMap">
</script>
<!-- END MAPS JS -->
<!-- BEGIN VENDOR JS -->
<script src="assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
<script src="assets/plugins/rickshaw/rickshaw.min.js"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
<script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>

<!-- END VENDOR JS -->

<!-- BEGIN CORE TEMPLATE JS -->
<script src="pages/js/pages.js" type="text/javascript"></script>
<script src="pages/js/pages.social.min.js"></script>
<!-- END CORE TEMPLATE JS -->

<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/js/scripts.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->

<script src="pages/js/pie-widget.js"></script>
<script src="pages/js/date-widget.js"></script>
<script src="pages/js/widget.js"></script>

