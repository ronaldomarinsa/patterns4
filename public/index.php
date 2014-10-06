<?php

set_include_path(get_include_path() . PATH_SEPARATOR . '../src/');

spl_autoload_register();

$form = new DP\Form\Form('contato');
$form->setAttribute('method', 'post');

$inputText = new DP\Form\Input('nome');
$inputText->setAttribute('type', 'text')
            ->setAttribute('required', 'required');            

$inputSubmit = new DP\Form\Input('enviar');
$inputSubmit->setAttribute('type', 'submit')                
                ->setAttribute('value', 'Enviar')
                ->setAttribute('class', 'btn');

$textArea = new DP\Form\TextArea('descricao');

$textArea->setAttribute('rows', '4')
            ->setAttribute('cols', '50');

$select = new \DP\Form\Select('cidade');
$select->setOptions(array('Sao Paulo', 'Rio de Janeiro', 'Manaus', 'Belo Horizonte'));

$radioF = new DP\Form\Input('sexo');
$radioF->setAttribute('type', 'radio')
        ->setAttribute('value', 'f');
$radioM = new DP\Form\Input('sexo');
$radioM->setAttribute('type', 'radio')
        ->setAttribute('value', 'm');

$form->addElement($inputText);
$form->addElement($inputSubmit);
$form->addElement($textArea);
$form->addElement($select);
$form->addElement($radioF);
$form->addElement($radioM);

require_once __DIR__ . '/../layout/header.phtml';
require_once __DIR__ . '/../view/contato.phtml';
require_once __DIR__ . '/../layout/footer.phtml';