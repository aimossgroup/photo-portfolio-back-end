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

<!-- Начало цикла выводящего посты -->
<div class="container">
<?php if(have_posts()): ?> <!-- проверяет есть ли посты -->
	<?php while(have_posts()): ?>  <!-- выполняет цикл пока есть ли посты -->
		<?php the_post(); ?> <!-- Получает запись для вывода. Устанавливает индексы поста в Цикле WP. Переопределяет глобальную переменную $post -->
		<div class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <!-- Отображает заголовок текущего поста -->
			<div class="entry">
				<?php the_content('читать полностью статью целиком...'); ?> <!-- Отображает содержимое текущего поста -->
				<p class="postmetadata">
					<?php _e('Категории: '); ?><?php the_category(', ') ?><br>
					<?php _e(' Автор: '); ?><?php the_author(); ?><br>
					<?php comments_popup_link('нет комментариев', '1 комментарий', 'кол-во комментариев: '); ?> |
					<?php edit_post_link(); ?> <!-- ссылка на переход к редактированию поста -->
				</p>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
</div>
<!--  Конец цикла выводящего посты -->

</body>
</html>

 