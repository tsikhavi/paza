<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Drop a line',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'info@pazastudios.com',
    'to' => 'tsikhaviwils@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'select' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Service',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Service\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    'agree' => array(
    'order' => 5,
    'type' => 'checkbox',
    'label' => 'I accept the Terms of service',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'I accept the Terms of service\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>