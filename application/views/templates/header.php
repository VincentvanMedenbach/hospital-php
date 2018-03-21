<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet"
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?php echo $library_src; ?>
    <script src="http://[::1]/hospital-php/js/jquery/jquery.tablesorter.js"></script>
</head>
<body>
<h1>Hospital</h1>
<ul class="">
    <li class='nav-item'><a href="<?php echo base_url(); ?>/patients">Patiënts</a></li>
    <li class='nav-item'><a href="<?php echo base_url(); ?>/clients">Clients</a></li>
    <li class='nav-item'><a href="<?php echo base_url(); ?>/species">Species</a></li>
</ul>
