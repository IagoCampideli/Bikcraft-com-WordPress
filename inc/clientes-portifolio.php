<?php $portifolio = get_page_by_title('portifolio'); ?>
<ul class="portfolio_lista rslides_portfolio">
	<?php if(have_rows('item_portifolio', $portifolio)): while(have_rows('item_portifolio', $portifolio)) : the_row(); ?>
	<li>
		<div class="grid-8"><img src="<?php the_sub_field('portifolio_imagem1', $portifolio); ?>" alt="<?php the_sub_field('portifolio_imagem1_descricao1', $portifolio); ?>"></div>

		<div class="grid-8"><img src="<?php the_sub_field('portifolio_imagem2', $portifolio); ?>" alt="<?php the_sub_field('portifolio_imagem2_descricao2', $portifolio); ?>"></div>

		<div class="grid-16"><img src="<?php the_sub_field('portifolio_imagem3', $portifolio); ?>" alt="<?php the_sub_field('portifolio_imagem3_descricao3', $portifolio); ?>"></div>
	</li>
	<?php endwhile; else : endif; ?>
</ul>

<?php if(!is_page('portifolio')) { ?>
<div class="call">
	<p><?php the_field('chamada_portifolio', $portifolio); ?></p>
	<a href="/bikcraft/portifolio/" class="btn">Portfólio</a>
</div>
<?php } ?>