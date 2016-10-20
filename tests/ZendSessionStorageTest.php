<?php
namespace Golem\Auth\Storage\ZendSession\Test;

use Zend\Session\Container;
use Golem\Auth\Storage\ZendSessionStorage;

class ZendSessionStorageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MemoryStorage
     */
    private $storage;

    public function setUp()
    {
        $this->session = new Container();
        $this->storage = new ZendSessionStorage($this->session, 'namespace');
    }

    public function tearDown()
    {
        unset($this->session['namespace']);
    }

    public function test_storing_and_reading()
    {
        $this->storage->store(1);
        $this->assertEquals(1, $this->storage->read());
    }

    public function test_checking_if_data_exists()
    {
        $this->assertFalse($this->storage->exists());
        $this->storage->store(1);
        $this->assertTrue($this->storage->exists());
    }

    public function test_clearing_data()
    {
        $this->storage->store(1);
        $this->assertTrue($this->storage->exists());
        $this->storage->clear();
        $this->assertFalse($this->storage->exists());
    }

    public function test_reading_returns_null_when_there_is_no_data()
    {
        $this->assertNull($this->storage->read());
    }
}
