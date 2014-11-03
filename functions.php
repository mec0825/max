<?php

/*
	Theme Name: Max
	Version: 0.1
	Author: mec0825
	Author URI: http://www.mec0825.net
*/	

	// Pagenavi of archive and index part
	function pagenavi( $p = 5 ) {
		
		if ( is_singular() ) return;
		global $wp_query, $paged;
		$max_page = $wp_query->max_num_pages;
		
		if ( $max_page == 1 ) return;
		echo '<ol class="page-navigator">';

		if ( empty( $paged ) ) $paged = 1;
		if ( $paged > 1 ) p_link( $paged - 1, 'previous', '&laquo; Previous' );
		if ( $paged < $max_page ) p_link( $paged + 1,'next', 'Next &raquo;' );

		echo '</ol>';
	}

	function p_link( $i, $title = '', $linktype = '' ) {
		if ( $title == '' ) $title = "第 {$i} 页";
		if ( $linktype == '' ) { $linktext = $i; } else { $linktext = $linktype; }
		echo "<div><a href='", esc_html( get_pagenum_link( $i ) ), "' class='{$title}'>{$linktext}</a></div>";
	}

?>
