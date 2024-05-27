<?php

interface DataBaseAdapter
{
    public function getData();
}

class Mysql implements DataBaseAdapter
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(DataBaseAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getData()
    {
        return $this->adapter->getData();
    }
}

$mysql = new Mysql();
$controller = new Controller($mysql);
echo $controller->getData();
