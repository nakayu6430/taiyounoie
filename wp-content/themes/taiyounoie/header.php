<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
<?php wp_title(); ?>
</title>

<meta name="viewport" content="width=device-width">
<!--フォントの取得-->
<!--<link href='http;//fonts.googleapis.com/css?family=Acme'
 rel='stylesheet' type='text/css'>-->
<!--アイコンの取得-->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css"
rel="stylesheet">
<!--スタイルシートの適用-->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="all">
</head>

<body <?php body_class(); ?>>

<header>
<div class="siteinfo">
<div class="container">
<h1>
<a href="<?php echo home_url(); ?>">
<?php bloginfo('name'); ?>
</a>
</h1>
<p><?php bloginfo('description'); ?></p>
</div><!--container-->
</div><!--siteinfo-->

<div class="container">

<!--ヘッダ画像の指定-->
<div class="headimg">
<?php if(get_header_image()):?>
<img src="<?php header_image(); ?>"
 alt="">
<?php endif;?>
</div><!--headimg-->

<nav>
<?php wp_nav_menu('theme_location=navigation'); ?>
</nav>
</div><!--container-->

</header>