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
                    <li class="active">
                        <a href="#">Overview</a>
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
                    <li>
                        <a href="location.php">Location</a>
                    </li>
                    <li>
                        <a href="clean.php">Cleaning</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Overall Working Situations</h1>
                <div class="alert alert-info">
                    5 Washers in total. 1 is normal.
                </div>
                <h2>Available Washers Now</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Location</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Situation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th><a href="location.php">SJTU</a></th>
                            <th>31.026572</th>
                            <th>121.435227</th>
                            <th>Normal</th>
                        </tr>
                        <?php
                            $arr = range(1,3);
                            foreach ($arr as $i):
                        ?>
                        <tr class="warning">
                            <th>
                                <?php echo $i; ?>
                            </th>
                            <th>SJTU</th>
                            <th>/</th>
                            <th>/</th>
                            <th>GPS Lost</th>
                        </tr>
                        <?php endforeach; ?>
                        <tr class="warning">
                            <th>4</th>
                            <th>SJTU</th>
                            <th>/</th>
                            <th>/</th>
                            <th>GPS Lost</th>
                        </tr>
                    </tbody>
                </table>
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
</body>
</html>
