<?php

class Slide{

	public function seleccionarSlideController(){

		$respuesta = SlideModels::seleccionarSlideModel("slide");

		foreach ($respuesta as $row => $item){
			echo ' <li>
	           	   	<img src="controlpanel/'.substr($item["slide_route"], 6).'">
	           	   	<div class="slideCaption">
	           	   		<h3>'.$item["slide_title"].'</h3>
			   	   		<p>'.$item["slide_description"].'</p>
	           	   	</div>
	               </li>';
		}
	}
}