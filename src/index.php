<?php

require __DIR__ . '/../vendor/autoload.php';

use Classes\User;
use Classes\MethodNotFoundException;

try {
    $user = new User("Serhii", "besha2vox@gmail.com", 124);
    echo $user->getAll() . PHP_EOL;
    $user->setAge(31);
    $user->setName("Bob");
    echo $user->getAll() . PHP_EOL;
    $user->setEmail("bob@gmail.com");
} catch (MethodNotFoundException $error) {
    echo $error->getMessage() . PHP_EOL;
} catch (\Exception $error) {
    echo $error->getMessage() . PHP_EOL;
}
