<?php
class File1
{
    public $surname = 'ыввмм';

    public $name = '';


    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}