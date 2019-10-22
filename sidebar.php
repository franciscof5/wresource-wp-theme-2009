		<!-- SIDEBAR -->
		<ul id="subpaginas">
			<?php
			$children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
			if ($children) { ?>
					<?php echo "<li class=\"linhacima\"><ul>".$children."</ul></li>"; ?>
			<?php } ?>
		</ul>
		<ul>
			<li>
				<img src="<?php bloginfo('stylesheet_directory') ?>/style/images/suporte.gif" />
			</li>
			<!--
			<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>
			-->
		</ul>