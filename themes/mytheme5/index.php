<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
<?php bloginfo( 'name' ); ?>
</a>
</header>

<?php if ( has_nav_menu( 'primary' ) ): ?>
<nav>
<?php wp_nav_menu( array(
	'theme_location' => 'primary',
) ); ?>
</nav>
<?php endif; ?>

<main>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>

<?php if( has_post_thumbnail() ): ?>
<figure>
<?php the_post_thumbnail(); ?>
</figure>
<?php endif; ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

</article>

<?php endwhile; endif; ?>

</main>

<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
<aside>
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
<?php endif; ?>

<footer>
<?php bloginfo( 'name' ); ?>
</footer>


<?php wp_footer(); ?>
</body>
</html>