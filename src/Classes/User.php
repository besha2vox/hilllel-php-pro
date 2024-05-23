<?php

namespace Classes;

use Classes\MethodNotFoundException;

class User
{
    public function __construct(private string $name, private string $email, private int $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    private function setName(string $name): void
    {
        $this->name = $name;
    }

    private function setAge(string $age): void
    {
        $this->age = $age;
    }

    public function getAll(): string
    {
        return "User name: $this->name, email: $this->email, age: $this->age";
    }

    public function __call(string $method, array $args)
    {

        if (!method_exists($this, $method)) {
            throw new MethodNotFoundException("Method $method does not exist.");
        }

        $this->$method(...$args);
    }
}
