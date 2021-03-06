<?php
/**
 * INTER-Mediator
 * Copyright (c) INTER-Mediator Directive Committee (http://inter-mediator.org)
 * This project started at the end of 2009 by Masayuki Nii msyk@msyk.net.
 *
 * INTER-Mediator is supplied under MIT License.
 * Please see the full license for details:
 * https://github.com/INTER-Mediator/INTER-Mediator/blob/master/dist-docs/License.txt
 *
 * @copyright     Copyright (c) INTER-Mediator Directive Committee (http://inter-mediator.org)
 * @link          https://inter-mediator.com/
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

require_once(dirname(__FILE__) . '/../../INTER-Mediator.php');

IM_Entry(
    array(
        array(
            'records' => 10,
            'name' => 'productlist',
            'view' => 'product',
            'key' => 'id',
            'query' => array(array('field' => 'name', 'value' => '%', 'operator' => 'LIKE')),
            'sort' => array(array('field' => 'name', 'direction' => 'ASC'),),
            'navi-control' => 'master-hide',
            'authentication'=> array(
                'media-handling' => true,
                'load' => array(),
            ),
        ),
        array(
            'records' => 1,
            'name' => 'productdetail',
            'view' => 'product',
            'key' => 'id',
            'navi-control' => 'detail',
            'authentication'=> array(
                'media-handling' => true,
                'load' => array(),
            ),
        ),
    ),
    array(
        'formatter' => array(
            array(
                'field' => 'product@unitprice',
                'converter-class' => 'Number',
                'parameter' => '0'
            ),
        ),
        'authentication' => array(
            'storing' => 'cookie',
            'realm' => 'Sample_products_auth',
        ),
        'media-root-dir' => $_SERVER['DOCUMENT_ROOT'] . '/INTER-Mediator/Samples/Sample_products/images',
        'media-context' => 'productlist',
    ),
    array('db-class' => 'PDO'),
    false
);
