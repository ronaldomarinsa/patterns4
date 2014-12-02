<?php
require_once __DIR__ . '/../vendor/autoload.php';

$di = new Aura\Di\Container(new Aura\Di\Factory());
$di->set('form', new \DP\Form\Form(
    new DP\Validator\Validator(new DP\Request\Request())
    ,'contato'));

/**@var $form \DP\Form\Form*/

$form = $di->get('form');
$form->setAttribute('method', 'post');

$inputText = new DP\Form\Input('nome');
$inputText->setAttribute('type', 'text')
            ->setAttribute('required', 'required');

$inputTextEmail = new \DP\Form\Input('email');
$inputTextEmail->setAttribute('type', 'text')
    ->setAttribute('required', 'required');

$fieldset = new \DP\Form\FieldSet('field');

$fieldset->createField($inputText);

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

$form->createField($fieldset)
        ->createField($inputSubmit)
        ->createField($textArea)
        ->createField($select)
        ->createField($radioF)
        ->createField($radioM)
        ->createField($inputTextEmail);

require_once __DIR__ . '/../layout/header.phtml';
require_once __DIR__ . '/../view/contato.phtml';
require_once __DIR__ . '/../layout/footer.phtml';