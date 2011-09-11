<?php
/*
 * INTER-Mediator Ver.@@@@2@@@@ Released @@@@1@@@@
 * 
 *   by Masayuki Nii  msyk@msyk.net Copyright (c) 2010 Masayuki Nii, All rights reserved.
 * 
 *   This project started at the end of 2009.
 *   INTER-Mediator is supplied under MIT License.
 */
require_once('../INTER-Mediator/INTER-Mediator.php');
$tableDefinitions = array(
    array(
        'name' => 'invoice',
        'records' => '1',
        'paging' => true,
        'key' => 'id',
        'sort' => array(
            array('field' => 'id', 'direction' => 'ASC'),
        ),
        'repeat-control' => 'insert delete',
    ),
    array(
        'name' => 'items',
        'table' => 'item',
        'view' => 'item_display',
        'key' => 'id',
        'relation' => array(
            array('foreign-key' => 'invoice_id', 'join-field' => 'id', 'operator' => '=')
        ),
        //    'foreign-key' 	=> 'invoice_id',
        //    'join-field' 	=> 'id',
        'repeat-control' => 'insert delete',
        'default-values' => array(array('field' => 'product_id', 'value' => 1),),
    ),
    array(
        'name' => 'product',
        'key' => 'id',
        'relation' => array(
            array('foreign-key' => 'id', 'join-field' => 'product_id', 'operator' => '=')
        ),
        //    'foreign-key' 	=> 'id',
        //    'join-field' 	=> 'product_id',
    ),
);
$optionDefinitions = array(
    'formatter' => array(
        array('field' => 'item@amount', 'converter-class' => 'Number', 'parameter' => '0'),
    ),
);
$dbDefinitions = array('db-class' => 'PDO');

IM_Entry($tableDefinitions, $optionDefinitions, $dbDefinitions, false);

?>