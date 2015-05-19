<?php if (!isset($TINY_FW)) exit('Access Denied'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta tags only before this -->

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $static('icon/apple-touch-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $static('icon/apple-touch-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $static('icon/apple-touch-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $static('icon/apple-touch-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $static('icon/apple-touch-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $static('icon/apple-touch-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $static('icon/apple-touch-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $static('icon/apple-touch-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $static('icon/apple-touch-icon-180x180.png'); ?>">
    <link rel="icon" type="image/png" href="<?php echo $static('icon/favicon-32x32.png'); ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo $static('icon/android-chrome-192x192.png'); ?>" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo $static('icon/favicon-96x96.png'); ?>" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo $static('icon/favicon-16x16.png'); ?>" sizes="16x16">
    <link rel="manifest" href="<?php echo $static('icon/manifest.json'); ?>">
    <meta name="msapplication-TileColor" content="#283a7e">
    <meta name="msapplication-TileImage" content="<?php echo $static('icon/mstile-144x144.png'); ?>">
    <meta name="theme-color" content="#ffffff">
    <!-- /favicon-->

    <title><?php echo $PAGE_TITLE; ?></title>

    <!-- cdn/css includes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel='stylesheet' href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Oxygen:400,300,700" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- /cdn/css includes -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- css includes -->
    <link rel="stylesheet" href="<?php echo $static('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo $static('css/media.css'); ?>">
    <!-- /css includes -->
</head>
<body>
    <div id="body-wrapper">

       <!-- header -->
       <?php include $fw_pages.$fw_header; ?>
       <!-- page -->
       <?php include $fw_pages.$INCLUDE_PAGE; ?>
       <!-- footer -->
       <?php include $fw_pages.$fw_footer; ?>

    </div><!-- /#body-wrapper -->
    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="<?php echo $static('js/script.js'); ?>"></script>
</body>
</html>
