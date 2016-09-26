<?php 
function getCatListShortCode($atts){

  extract(shortcode_atts(array(
   "catid" => "1,7,8,9",
  ),$atts));

  $categoryid = explode(',',$catid);

	if(is_array($categoryid)){
		$list = '<ul>';
		foreach($categoryid as $id){
			$list.= '<li><a href="' . esc_url(get_category_link($id)) . '">' . get_cat_name($id) . '</a></li>';
		}
		$list .= '</ul>'; 
	}
	return $list;

}
add_shortcode( 'getCatList', 'getCatListShortCode');

?>