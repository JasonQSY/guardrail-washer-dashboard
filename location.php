<?php
/**
 * Created by PhpStorm.
 * User: JasonQSY
 * Date: 7/14/16
 * Time: 10:39 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Automatic Highway Guardrail Washer</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">

    <link rel="import" href="bower_components/google-map/google-map.html">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #f5f5f5;
        }

        .container .text-muted {
            margin: 20px 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><strong>Automatic Highway Guardrail Washer</strong></a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li>
                    <a href="index.php">Overview</a>
                </li>
                <li>
                    <a href="#">Reports</a>
                </li>
            </ul>
            <ul class="nav nav-sidebar">
                <li>
                    <a href="#">
                        Detail
                    </a>
                </li>
                <li class="active">
                    <a href="#">Location</a>
                </li>
                <li>
                    <a href="clean.php">Cleaning</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Location of Washer #1</h1>
            <google-map style="height: 600px;" latitude="31.026572" longitude="121.435227" min-zoom="16">
                <!-- Actually you need a api-key in the tab google-map -->
                <google-map-marker latitude="31.026572" longitude="121.435227"
                                   draggable="true" title="Go Giants!"></google-map-marker>
            </google-map>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted text-center">
                Created by <a href="https://github.com/JasonQSY">JasonQSY</a>. All rights reserved.
            </p>
        </div>
    </footer>
</div>

<!-- js here -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- highcharts -->
<script src="bower_components/highcharts/highcharts.js"></script>
<script src="bower_components/webcomponentsjs/webcomponents.min.js"></script>
</body>
</html>
