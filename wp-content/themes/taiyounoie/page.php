<!DOCTYPE html>
<html lang="ja">
<!--固定ページの表示-->

<?php get_header(); ?>

<!--記事の表示-->
<div class="container">
<div class="contents">
<?php if(have_posts()): while(have_posts()):
the_post(); ?>
	<article <?php post_class(); ?>>
	<h1><?php the_title(); ?></h1>
	<!--投稿情報-->
	<div class="postinfo"></div>
	<!--記事の内容表示-->
	<?php the_content(); ?>
	</article>
<?php endwhile; endif; ?>
</div>
<!--サイドバー-->
<?php get_sidebar(); ?>
</div> <!--container-->

<?php get_footer(); ?>