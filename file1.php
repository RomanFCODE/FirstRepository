<?php
class File1
{
    private string $surname = 'From branch main user1';

    private string $name = 'predefined';

    private int $age = 18;


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
    public function getName(): string
    {
        return $this->name;
    }
}