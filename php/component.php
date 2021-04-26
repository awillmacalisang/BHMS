<?php

function inputElement($icon, $placeholder, $aria, $name, $value){
	$ele = "

		<div class=\"input-group mb-3\">
  			<span class=\"input-group-text bg-light\" id=\"basic-addon1\">$icon</span>
  			<input type=\"text\" name = '$name' value='$value' class=\"form-control\" autocomplete=\"off\" placeholder='$placeholder' aria-label='$aria' aria-describedby=\"basic-addon1\">
		</div>

	";

	echo $ele;
}

function buttonElement($btnid, $styleclass, $text, $name, $attr){
	$btn = "

  			<button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>
	";

	echo $btn;
}