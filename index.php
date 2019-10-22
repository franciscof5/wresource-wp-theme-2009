<?php 
//Caminho das imagens
$path = "/style/images/";
get_header(); 
?>
	<p>
		<img src="<?php bloginfo('stylesheet_directory'); echo $path ?>imagem865x233.jpg" />
	</p>
		<table id="tabelaCorpo">
			<tr valign="top">
				<!-- COLUNA ESQUERDA -->
				<td width="190"><img src="<?php bloginfo('stylesheet_directory'); echo $path ?>suporte.gif" />&nbsp;</td>
				<!-- COLUNA CENTRAL -->
				<td width="430">
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
					<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
					
				</td>
				<!-- COLUNA DIREITA -->
				<td><img src="<?php bloginfo('stylesheet_directory'); echo $path ?>clientes.jpg" /></td>
			</tr>
		</table>
		<!-- SCRIPT COM ULTIMOS POSTS -->
		<div id="posts">
			<table>
				<tr valign="middle">
					<td><img src="<?php bloginfo('stylesheet_directory'); echo $path ?>technorati_icon.png" /></td>
					<td><span class="fonteVermelha"> EM NOSSO BLOG </span></td>
				</tr>
			</table>
			&nbsp;
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php 
					$i=0; 
					if ($i<4){ /*
						echo '
						<div class="post" id=post-"'.the_ID().'">
							<p>
								<span class="fonteVermelha">'.the_time('j/m/y').'</span>
								<span class="fontePreta">'.the_title().'|</span>
								<a href="'.the_permalink().'" rel="bookmark" title="Link para o post '.the_title_attribute().'">
									<span class="fonteAzul">Ler Agora</span>
								</a>
							</p>
						</div>
						';
						echo "
						<div class=\"post\" id=\"post-the_ID()\">
							<p>".
								the_date('d/m/y', '<span class="fonteVermelha">', '</span>');
								the_title('<span class="fontePreta">','</span>')." ;| <a href=\"the_permalink()\" rel=\"bookmark\" title=\"Permanent Link to the_title_attribute(); \"> <span class=\"fonteAzul\">Ler Agora</span> </a></p>
						</div>";*/
							
					?>
					<div class="post" id="post-><?php the_ID()?>">
						<p><span class="fonteVermelha"><?php the_time('j/m/y') ?></span> <span class="fontePreta"><?php the_title(); ?> |</span> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> <span class="fonteAzul">Ler Agora</span> </a></p>
					</div>
					<?php 
					$i++;
					} ?>
				<?php endwhile; ?>
					
					<ul>
						<li><?php next_posts_link('&laquo; Older Entries') ?></li>
						<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
					</ul>		
			<?php else : ?>
				<h2>Not Found</h2>
				<p>Sorry, but you are looking for something that isn't here.</p>
				<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			<?php endif; ?>
		</div>
<?php /*get_sidebar(); */?>

<?php get_footer(); ?>