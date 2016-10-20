<?php
namespace Golem\Auth\Storage;


class ZendSessionStorage implements StorageInterface
{
    /**
     * @var \Zend\Session\Container
     */
    private $session;

    /**
     * @var string
     */
    private $namespace;

    /**
     * AuraSessionStorage constructor.
     * @param \Zend\Session\Container $session
     * @param string $namespace
     */
    public function __construct(\Zend\Session\Container $session, $namespace = 'golem_auth')
    {
        $this->session = $session;
        $this->namespace = $namespace;
    }
    /**
     * @param string|int $id
     * @return void
     */
    public function store($id)
    {
        $this->session[$this->namespace] = $id;
    }

    /**
     * @return string|int
     */
    public function read()
    {
        if (!$this->exists()) {
            return null;
        }
        return $this->session[$this->namespace];
    }

    /**
     * @return bool
     */
    public function exists()
    {
        return isset($this->session[$this->namespace]);
    }

    /**
     * Clears out identity
     */
    public function clear()
    {
        unset($this->session[$this->namespace]);
    }
}
