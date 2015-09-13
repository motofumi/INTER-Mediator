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
            'name' => 'chat',
            'records' => 10,
            'paging' => true,
            'key' => 'id',
            'query' => array( //    array('field' => 'issued', 'value' => '2012-01-01', 'operator' => '>=')
            ),
            'sort' => array(
                array('field' => 'postdt', 'direction' => 'DESC'),
            ),
            'post-reconstruct' => true,
            'repeat-control' => 'insert delete',
            'calculation' => array(
                array(
                    'field' => 'calc',
                    'expression' => "'<special>' + message",
                ),
            ),
            'validation' => array(
                array(
                    'field' => 'message',
                    'rule' => 'length(value)>10',
                    'message' => 'You should write more than 10 characters.',
                    'notify' => 'end-of-sibling'
                ),
            ),
        ),
    ),
    array(),
    array(
        'db-class' => 'PDO'
    ),
    0
);
