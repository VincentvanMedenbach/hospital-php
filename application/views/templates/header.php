<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <?php echo $library_src;?>
    <script src="http://[::1]/hospital-php/js/jquery/jquery.tablesorter.js"></script>
</head>
<body>
<h1>Hospital</h1>
<ul>
    <li><a href="<?php echo base_url(); ?>/patients">Patiënts</a></li>
    <li><a href="<?php echo base_url(); ?>/clients">Clients</a></li>
    <li><a href="<?php echo base_url(); ?>/species">Species</a></li>
</ul>
