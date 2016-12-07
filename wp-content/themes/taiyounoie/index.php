<!DOCTYPE html>
<html lang="ja">

<!--ヘッダ-->
<?php get_header(); ?>

<div class="container">

<div class="contents">
<!--記事の内容(loop.php)-->
<?php get_template_part('loop'); ?>

	<!--記事移動ボタンの作成-->
	<?php if($wp_query->max_num_pages > 1): ?>
	<div class="pagenav">
		<span class="old">
		<?php next_posts_link( 
		'<i class="fa fa-chevron-circle-left"></i> 古い記事'); ?>
		</span>

		<span class="new">
		<?php previous_posts_link( 
		 '新しい記事 <i class="fa fa-chevron-circle-right"></i>'); ?>
		</span>
	</div>
	<?php endif; ?>
</div><!--contents-->

<!--サイドバー-->
<?php get_sidebar(); ?>
</div><!--container-->

<!--フッタ-->
<?php get_footer(); ?>