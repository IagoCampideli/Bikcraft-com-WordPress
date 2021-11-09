<?php
// Template Name: Portifolio
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Quando um arquivo se repete, criar uma pasta inc, um arquivo introducao.php e fazer o link a baixo -->
		<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="container animar-interno">
			<ul class="rslides">
				<?php if(have_rows('quote_portifolio')): while(have_rows('quote_portifolio')) : the_row(); ?>
				<li>
					<blockquote class="quote_clientes">
						<?php the_sub_field('quote'); ?>
						<cite><?php the_sub_field('nome_quote'); ?></cite>	
					
					</blockquote>
				</li>
				<?php endwhile; else : endif; ?>
				
			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<!-- Quando um arquivo se repete, criar uma pasta inc, um arquivo introducao.php e fazer o link a baixo -->
				<?php include(TEMPLATEPATH . "/inc/clientes-portifolio.php"); ?>
			</div>
		</section>

<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>