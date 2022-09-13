<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
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
    'label' => 'Name: ',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name: \' is required.'
    )
    ),
    'phone' => array(
    'order' => 2,
    'type' => 'tel',
    'label' => 'Phone:',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone:\' is required.'
    )
    ),
    'date' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Date:     ',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Date:     \' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>