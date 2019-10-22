<?php get_header(); ?>
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<?php /*<h2> the_title(); </h2>*/ ?>
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			<?php endwhile; endif; ?>
		<?php /*edit_post_link('Edit this entry.', '<p>', '</p>'); */?>
		<!-- ESSE DIV É ABERTO DENTRO DO POST DEPOIS DA IMAGEM É O DIV CONTEUDO -->
		</div>
		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>