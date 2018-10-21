<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AmazeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/amaze/';
    public $css = [
        "assets/css/bootstrap.min.css",
        "assets/css/amaze.css",
        "assets/css/demo.css",
        "assets/css/font-awesome.min.css",
        "assets/css/font-muli.css",
        "assets/css/themify-icons.css",
        "assets/vendors/sweetalert/css/sweetalert2.min.css",
    ];
    public $js = [
        "assets/vendors/jquery-3.1.1.min.js",
        "assets/vendors/jquery-ui.min.js",
        "assets/vendors/bootstrap.min.js",
        "assets/vendors/material.min.js",
        "assets/vendors/perfect-scrollbar.jquery.min.js",
        "assets/vendors/jquery.validate.min.js",
        "assets/vendors/moment.min.js",
        "assets/vendors/charts/flot/jquery.flot.js",
        "assets/vendors/charts/flot/jquery.flot.resize.js",
        "assets/vendors/charts/flot/jquery.flot.pie.js",
        "assets/vendors/charts/flot/jquery.flot.stack.js",
        "assets/vendors/charts/flot/jquery.flot.categories.js",
        "assets/vendors/charts/chartjs/Chart.min.js",
        "assets/vendors/jquery.bootstrap-wizard.js",
        "assets/vendors/bootstrap-notify.js",
        "assets/vendors/bootstrap-datetimepicker.js",
        "assets/vendors/jquery-jvectormap.js",
        "assets/vendors/nouislider.min.js",
        "assets/vendors/jquery.select-bootstrap.js",
        "assets/js/bootstrap-checkbox-radio-switch-tags.js",
        "assets/js/jquery.easypiechart.min.js",
        "assets/vendors/jquery.datatables.js",
        "assets/vendors/sweetalert/js/sweetalert2.min.js",
        "assets/vendors/jasny-bootstrap.min.js",
        "assets/vendors/fullcalendar.min.js",
        "assets/vendors/jquery.tagsinput.js",
        "assets/js/amaze.js",
        "assets/js/demo.js",
        "assets/js/charts/flot-charts.js",
        "assets/js/charts/chartjs-charts.js",
    ];
    public $depends = [
    ];
}
