<?php

set_include_path(get_include_path() . PATH_SEPARATOR . '../src/');

spl_autoload_register();

$form = new DP\Form\Form();
$form->setAttribute('method', 'post');
$form->setAttribute('action', '/contato');
$form->openTag();
$form->closeTag();

echo $form->render();