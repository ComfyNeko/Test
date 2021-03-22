<?php
require_once 'PHPUnit/Autoload.php';
require_once('RemoteConnect.php');

class RemoteConnectTest extends \PHPUnit\Framework\TestCase
{
  // public function setUp(){ }
  // public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = 'http://35.235.127.18/';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
 }
?>
