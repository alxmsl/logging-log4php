<?php
require_once dirname(__FILE__).'/../phpunit.php';

require_once LOG4PHP_DIR . '/appenders/LoggerAppenderNull.php';

class LoggerAppenderNullTest extends PHPUnit_Framework_TestCase {

        public function setUp() {
        }
        
        public function tearDown() {
        }
        
        public function testActivateOptions() { 
                throw new PHPUnit_Framework_IncompleteTestError();
    }
    
    public function testClose() {
                throw new PHPUnit_Framework_IncompleteTestError();
    }
        
}

?>