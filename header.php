<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i|Zilla+Slab:400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
	<title><?php wp_title(''); echo ' | '; bloginfo( 'name' ); ?></title>
	 <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url') . '/favicon.png'; ?>">

    <?php wp_head(); ?>



</head>
<body>