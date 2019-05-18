<?php get_header(); ?>

<main>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>

<?php if( has_post_thumbnail() ): ?>
<figure>
<?php the_post_thumbnail(); ?>
</figure>
<?php endif; ?>

<?php the_category(); ?>

<h1><?php the_title(); ?></h1>

<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
<i class="far fa-clock"></i>
<?php echo esc_html( get_the_date() ); ?>
</time>

<?php the_content(); ?>

</article>

<?php endwhile; endif; ?>

<?php the_post_navigation(); ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
