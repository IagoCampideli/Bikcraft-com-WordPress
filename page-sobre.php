<?php
// Template Name: Sobre
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Quando um arquivo se repete, criar uma pasta inc, um arquivo introducao.php e fazer o link a baixo -->
		<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="missao_sobre container animar-interno">
			<div class="grid-10">
				<h2 class="subtitulo-interno">História, Missão e Visão</h2>
				<?php the_field('missao'); ?>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno">Valores</h2>
				<ul>
				<?php the_field('valores'); ?>
				</ul>
			</div>

			<div class="grid-16 foto-equipe">
				<img src="<?php the_field('imagem_equipe'); ?>" alt="Equipe Bikcraft">
			</div>

		</section>

		<!-- Quando um arquivo se repete, criar uma pasta inc, um arquivo introducao.php e fazer o link a baixo -->
		<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>

<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>