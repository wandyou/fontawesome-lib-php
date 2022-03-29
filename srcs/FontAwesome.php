<?php

/*
	Based on FontAwesome 6.1.0
	FontAwesome : https://fontawesome.com/
	FontAwesome Doc : https://fontawesome.com/docs
*/

class FontAwesome
{
	protected $_defaults;

	public function __construct($kit_id, $defaults = NULL)
	{
		if (empty($kit_id))
			throw new \Exception("Font Awesome Kit ID is invalid.");

		?>
			<script src="https://kit.fontawesome.com/<?= $kit_id; ?>.js" crossorigin="anonymous"></script>
		<?php

		if (!empty($defaults))
			$this->_defaults = $defaults;
	}

	public function print($icon, $css = NULL)
	{
		if (array_key_exists($icon, $this->_defaults))
			$icon = $this->_defaults[$icon];
		if (!str_contains($icon, "fa-"))
			$icon = "fa-" . $icon;
		if (!str_contains($icon, "fa-solid "))
			$icon = "fa-solid " . $icon;

		?>
			<i class="<?= $icon; ?>" style="<?= $css; ?>"></i>
		<?php
	}
}

?>