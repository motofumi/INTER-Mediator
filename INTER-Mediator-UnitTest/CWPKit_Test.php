<?php

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'CWPKit' . DIRECTORY_SEPARATOR . 'CWPKit.php');

class CWPKit_Test extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $config = array(
            'urlScheme' => 'http',
            'dataServer' => '192.168.56.1',
            'dataPort' => '80',
            'DBUser' => 'web',
            'DBPassword' => 'password',
        );
        $this->cwpkit = new CWPKit($config);
    }

    public function test_query()
    {
        $queryString = '-db=TestDB&-lay=person_layout&-findall&-max=1';
        $xml = $this->cwpkit->query($queryString);

        $expteced = '1.0';
        var_dump($xml);
        $result = (string)$xml->attributes()->version;
        $this->assertEquals($result, $expteced);

        $expteced = 3;
        $result = (int)$xml->resultset->attributes()->count;
        $this->assertEquals($result, $expteced);
    }

}
