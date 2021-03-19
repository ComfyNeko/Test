<?php
require_once 'PHPUnit/Autoload.php';
require_once ('PHPUnit/Framework/TestCase.php');
require_once('RemoteConnect.php');

class RemoteConnectTest
{
  // public function setUp(){ }
  // public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = 'www.google.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
 }
?>
