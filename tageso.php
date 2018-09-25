<?php
/*
* Plugin Name: Tageso Protocol View
* Description: List Public Tageso Protocols on your Page
* Version: 0.1.0
* Author: Sören Poschmann
* Author URI: https://www.tageso.de
*/


function tageso_protocoll_list($args){
    $res = file_get_contents("https://api.tageso.de/agenda/".$args["agenda"]."/protocol");
    $data = json_decode($res);
    foreach($data->data as $p) {
        echo '<li><a href="https://app.tageso.de/#/agenda/'.$args["agenda"].'/protocol/'.$p->_id.'">'.$p->date."</a></li>";
    }
}
add_shortcode('tageso_protocoll_list', 'tageso_protocoll_list');
?>
