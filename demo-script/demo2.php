<?php header( 'Content-Type: text/html; charset="UTF-8"' ); ?><html><head><?php 	require_once( '../develop-im/INTER-Mediator/INTER-Mediator.php' );	InitializePage(		array(			array(				'records'	=>	16,				'name'	=> 'postalcode',					'key' 	=> 'id',				'query'	=> array( array( 'field'=>'f8', 'operator'=>'eq', 'value'=>'港区' ) ),				'sort'	=> array( array( 'field'=>'f3', 'direction'=>'descend' ),),			),		)	);	?><script type="text/javascript"></script></head><body onload="doAtTheStarting();" onbeforeunload="return doAtTheFinishing();"><?php GenerateConsole( 'pos nav'); ?><table border="1">	<tr>		<th>郵便番号</th>		<th>都道府県</th>		<th>市区町村</th>		<th>町域名</th>	</tr>	<tr>		<td><div title="postalcode@f3"></div></td>		<td><div title="postalcode@f7"></div></td>		<td><div title="postalcode@f8"></div></td>		<td><div title="postalcode@f9"></div></td>	</tr></table></body></html>