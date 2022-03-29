<?php

require ("srcs/FontAwesome.php");

// new FontAwesome(kit_id, [defaults_array]);
$icon = new FontAwesome(YOUR_KIT_ID, array(
	"user" => "fa-solid fa-user",
	"cart" => "fa-solid fa-cart-shopping"
));
$icon->print("cart"); // In defaults, allows to reduce name length and/or use abbreviation and/or different icon name.

// Other ways to call an icon that are handeled by FontAwesome class:
$icon->print("fa-heart");
$icon->print("heart");
$icon->print("fa-solid fa-heart");

?>