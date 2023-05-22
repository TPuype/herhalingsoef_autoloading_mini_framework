<?php

declare(strict_types=1);

namespace Entities;

class User
{
    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName= $firstName;
        $this->lastName = $lastName;
    }

    public function greetUser() : string{
        return "Hello " . $this->firstName  . " " . $this->lastName;
    }
}
