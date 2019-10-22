<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<title>
			<?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?>
		</title>

	    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); 
		/*
		src="<?php bloginfo('stylesheet_directory'); ?>/style/imagens/top_bar.jpg"
		
		$path = bloginfo('stylesheet_directory');*/
		$path = "/style/images/";
		?>

	</head>

<body>
<div id="corpo">
	<div id="header">
		<table id="tabelaHeader">
			<tr valign="middle">
				<td width="420">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/style/images/wresource.jpg" />
				</td>
				<!--
				<td>
					<table id="tabelaMenu">
						<tr valign="bottom">
							<td>empresas</td>
							<td>tradu&ccedil;&otilde;es</td>
							<td>clientes</td>
							<td>contato</td>
							<td class="tdFonteVermelha">blog</td>
					</table>
				</td>
				-->
			<div class="nav"> 
				<ul id="MenuBar1" class="MenuBarHorizontal"> 
					<li>
						<br /><br /><br />
						<a href="#" class="MenuBarItemSubmenu"> empresas</a> 
						<ul> 
						
						<li><a href="http://pensedynamo.com/agencia-marketing-busca.htm" title="Quem &eacute;  e o que faz a Dynamo?">Quem somos</a></li> 
						
						<li><a href="http://pensedynamo.com/nossa-metodologia.htm" title="O jeito Dynamo de fazer marketing">Metodologia</a></li> 
						
						<li><a href="http://pensedynamo.com/nossa-equipe.htm" title="Conhe&ccedil;a nossa equipe">Equipe</a></li> 
						
						<li><a href="http://pensedynamo.com/clientes.htm" title="Nosso Clientes">Clientes</a></li> 
						
						<li><a href="http://pensedynamo.com/trabalhe-conosco.htm" title="Vagas na Dynamo">Trabalhe conosco</a></li> 
						
						</ul>
					</li> 
					<li>
						<br /><br /><br />
						<a href="#">servi&ccedil;os</a> 
						<ul> 
						
						<li><a href="http://pensedynamo.com/consultoria-otimizacao-sites.htm" title="Otimiza&ccedil;&atilde;o Profissional de Sites">Otimiza&ccedil;&atilde;o de Sites</a></li> 
						
						<li><a href="http://pensedynamo.com/consultoria-links-patrocinados.htm" title="Consultoria em Links Patrocinados Google Adwords">Links Patrocinados</a></li> 
						
						<li><a href="http://pensedynamo.com/consultoria-webdesign.htm" title="Consultoria em Webdesign">Webdesign</a></li> 
						
						</ul> 
					</li> 
					<li>
						<br /><br /><br />
						<a href="#">tradu&ccedil;&otilde;es</a> 
						<ul> 
						
						<li><a href="http://pensedynamo.com/website-check-up.htm" title="Saiba o que pode ser melhorado em seu site">Site &quot;Check UP&quot;</a> </li> 
						
						<li><a href="http://pensedynamo.com/consultoria-light.htm" title="Consultoria em 60 min">Consultoria Light</a></li> 
						
						</ul> 
					</li> 
					<li>
						<br /><br /><br />
						<a href="#">clientes</a> 
						<ul> 
						
						<li><a href="http://blog.pensedynamo.com" title="Blog sobre SEM Marketing de Busca">Blog</a></li> 
						
						<li><a href="http://pensedynamo.com/artigos-marketing-busca.htm" title="Artigos sobre Marketing Digital">Artigos</a></li> 
						
						<li><a href="http://pensedynamo.com/imprensa/index.htm" title="Press Releases e Noticias sobre a ag&ecirc;ncia">Sala de Imprensa</a></li> 
						
						<li><a href="http://www.pensedynamo.com/extranet" title="Acesso restrito">Extranet</a></li> 
						
						</ul> 
					</li> 
					<li>
						<br /><br /><br />
						<a href="contato.htm" title="Entre em contato">contato</a> 
						<ul> 
						
						<li><a href="http://pensedynamo.com/contato.htm" title="Entre em contato conosco">Contato Geral</a></li> 
						
						<li><a href="http://pensedynamo.com/orcamento-servicos.htm" title="Solicite um or&ccedil;amento para  um nossos servi&ccedil;os">Solicitar Or&ccedil;amento</a></li> 
						
						<li><a href="http://pensedynamo.com/suporte.htm" title="Suporte t&eacute;cnico">Suporte T&eacute;cnico</a></li> 
						
						</ul> 
					</li> 
					<li class="home2">
						<br /><br /><br />
						<a href="http://www.pensedynamo.com/blog/index.php" title="P&aacute;gina Inicial" class="home">blog</a>
					</li> 
				</ul>
			</div>
			</tr>
		</table>
	</div>
	<?php
	/*
	<p>
		<img src="<?php bloginfo('stylesheet_directory'); echo $path ?>imagem865x233.jpg" />
	</p>
	*/
	?>