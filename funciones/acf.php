<?php 
/**
ACF
**/

// Cambiar titulo etiqueta bloque contenido flexible
function my_layout_title($title, $field, $layout, $i) {
	if($value = get_sub_field('layout_title')) {
		return $value;
	}
	return $title;
}
add_filter('acf/fields/flexible_content/layout_title/name=nombre_contenido_flexible', 'my_layout_title', 10, 4);