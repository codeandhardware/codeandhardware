<?php

$bhome1 = 1;
$result &= $this->installFixture('1','home', $bhome1, '12', 'Custom HTML goes here', $this->context->shop->id, $language['id_lang']);

$bhome2 = 2;
$result &= $this->installFixture('1','left', $bhome2, '12', 'Custom HTML goes here', $this->context->shop->id, $language['id_lang']);

$toppanel = null;
$result &= $this->installFixture('1','toppanel', $toppanel, '12', '
Call: +1 234 567899 Mail: <a href="#">neptune@ayontheme.com</a> Working Time: 10AM - 8PM
', $this->context->shop->id, $language['id_lang']);

$footer = null;
$result &= $this->installFixture('1','footer', $footer, '12', '
Copyright 2019 © RoyThemes.<br />
Phone: +0 123 456 78 - Mail: <a href="ayon@roythemes.com">ayon@roythemes.com</a>
', $this->context->shop->id, $language['id_lang']);

?>
