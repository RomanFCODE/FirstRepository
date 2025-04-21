<?php

class file3
{
    private $file;

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }
    public function __construct($file){
        $this->file = $file;
    }

}