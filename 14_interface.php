<?php
namespace myApp;

interface Comparable
{
    public function __construct(int $id, string $name);
}

class User implements Comparable
{
    public $id;
    public $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function compareTo(object $userr)
    {
        return $userr->id === $this->id;
    }
}

$user1 = new User(4, 'tolya');
$user2 = new User(1, 'petya');
var_dump($user1->compareTo($user2)); // false
