<?php if(have_posts()): while(have_posts()):
the_post(); ?>
<article <?php post_class(); ?>>

	<!--記事のタイトル表示-->
	<?php if(is_single()): ?><!--個別ページ-->
		<h1><?php the_title(); ?></h1>
	<?php else: ?>           <!--それ以外-->
		<h1>
		<a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
		</h1>
	<?php endif; ?>

	<!--投稿情報-->
	<div class="postinfo">
	<!--投稿日時-->
	<time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>">
	<!--時計アイコン-->
	<i class="fa fa-clock-o"></i>
	<?php echo get_the_date(); ?>
	</time>

	<!--記事のカテゴリ-->
	<span class="postcat">
	<!--フォルダアイコン-->
	<i class="fa fa-folder-open"></i>
	<?php the_category(', '); ?>
	</span>
	</div>
	
	<!--記事の内容表示-->
	<?php if(is_single()): ?>
		<?php the_content(); ?>
	<?php else: ?>
		<div class="excerpt">
		<?php the_excerpt(); ?>
		<p class="more"><a href="<?php the_permalink(); ?>">
			続きを読む<i class="fa fa-chevron-right"></i></a></p>
		</div>
	<?php endif; ?>


	<?php if(is_single()): ?>



	<?php endif; ?>
</article>
<?php endwhile; endif; ?>