<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<title><?php echo wp_get_document_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
<div id="header">
	<h1><a href="<?php echo esc_url(bloginfo('url')); ?>"><?php bloginfo('name'); ?></a></h1> <!-- возможно здесь esc_url() не нужна -->
	<p><?php bloginfo('description') ?></p>
</div>

</body>
</html>

