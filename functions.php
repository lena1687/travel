<?php 
function my_scripts_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js');
	wp_enqueue_script( 'jquery', null, null, null, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', null, null, true );
	wp_enqueue_script( 'jquery.fancybox.min', get_template_directory_uri() . '/js/jquery.fancybox.min.js', null, null, true );
	wp_enqueue_script( 'jquery.mosaicflow.min', get_template_directory_uri() . '/js/jquery.mosaicflow.min.js', null, null, true );
}
/**загружаемые стили и скрипты**/
function theme_name_styles() { 
	wp_enqueue_style( 'jquery.fancybox.min', get_template_directory_uri() . '/jquery.fancybox.min.css');
	wp_enqueue_style( 'style', get_stylesheet_uri());
}
/**загружаем стили и скрипты**/
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
add_action( 'wp_enqueue_scripts','theme_name_styles' );

/**функционал добавления меню - после обновления внешний вид-меню**/  
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

/**поддержка виджетов сайдбар**/

	$args = array(
		'name'          => __( 'Виджеты сайдбара'),
		'id'            => 'sidebar',
		'description'   => 'здесь разместите виджеты',
		'class'         => '',
		'before_widget' => '<div class="aside-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	);

	register_sidebar( $args );

/**загружаем миниатюры для постов**/

add_theme_support( 'post-thumbnails');

/**постраничная навигация**/

function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '«'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '»'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}


/**комментирование**/

function twentyfifteen_comment_nav() { 
    // Are there comments to navigate through? 
   if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : 
    ?> 
    <nav class="navigation comment-navigation" role="navigation"> 
        <h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfifteen' ); ?></h2> 
        <div class="nav-links"> 
            <?php 
                if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'twentyfifteen' ) ) ) : 
                    printf( '<div class="nav-previous">%s</div>', $prev_link ); 
                endif; 
 
                if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'twentyfifteen' ) ) ) : 
                    printf( '<div class="nav-next">%s</div>', $next_link ); 
                endif; 
            ?> 
        </div><!-- .nav-links --> 
    </nav><!-- .comment-navigation --> 
    <?php 
    endif; 
} 
?>