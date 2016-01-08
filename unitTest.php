<?php
/**
 * Date: 7/18/15
 * Time: 6:53 PM
 */
$loader = require_once __DIR__ . "/vendor/autoload.php";

use Project\task;

use Project\extendedTask;

class Test extends \PHPUnit_Framework_TestCase
{

    // ...

    public function testOne()
    {
        file_put_contents("data.json", '[["3.4","4"],["3","2.6"]]');
        $class = task::create();
        $class->doIt("data.json", "result.json");
        $class = extendedTask::create();
        $class->doIt("data.json", "result2.json");
        $this->assertEquals(file_get_contents("result.json"), '["3.4","4","3","2.6"]');
        $this->assertEquals(file_get_contents("result2.json"), '[3,4,3,3]');

    }
}