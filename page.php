<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	<?php get_template_part('breadcrumbs'); ?>

	<?php if(is_page('produtos')) : ?>
		<?php get_template_part('produtos'); ?>
    <?php elseif(is_page('fabricantes')) : ?>
		<?php get_template_part('fabricantes'); ?>
    <?php elseif(is_page('verticais')) : ?>
		<?php get_template_part('verticais'); ?>
    <?php elseif(is_tree(7)) : ?>
		<?php get_template_part('vertical'); ?>
    <?php elseif(is_page('empresa')) : ?>
    	<?php get_template_part('empresa'); ?>
    <?php elseif(is_page('blog')) : ?>
    	<?php get_template_part('blog'); ?>
    <?php elseif(is_page('fale-conosco')) : ?>
    	<?php get_template_part('fale-conosco'); ?>
    <?php elseif(is_page('fale-com-o-presidente')) : ?>
		<?php get_template_part('presidente'); ?>
    <?php elseif(is_page('depoimentos')) : ?>
		<?php get_template_part('depoimentos'); ?>
    <?php elseif(is_page('trabalhe-conosco')) : ?>
		<?php get_template_part('trabalhe'); ?>
    <?php elseif(is_page('documentos')) : ?>
		<?php get_template_part('documentos'); ?>
    <?php elseif(is_page('treinamentos')) : ?>
		<?php get_template_part('treinamentos'); ?>
    <?php elseif(is_page('treinamento-teste')) : ?>
		<?php get_template_part('treinamento'); ?>
    <?php elseif(is_page('minha-conta')) : ?>
		<?php get_template_part('minha-conta'); ?>
    <?php else : ?>
        <?php get_template_part('padrao'); ?>
    <?php endif; ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>