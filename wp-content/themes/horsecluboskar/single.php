<?php
/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package HorseClubOskar
 */
?>
<?php get_template_part( 'header_for_page_of_blog' ); ?>
<!-- "header_for_page_of_blog" opens the "content_page_of_blog_screen" -->
<?php get_template_part( 'page_of_blog_area_for_continuation_of_the_article' ); ?>
<?php get_template_part( 'page_of_blog_area_for_continuation_of_the_article-2' ); ?>
<?php  disqus_embed('horseclub-1');  ?>
<?php get_template_part( 'footer_for_blog' ); ?>