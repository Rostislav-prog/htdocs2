<?php

class Task
{
    private string $description;
    private bool $isDone;

    public function __constract(string $description, bool $isDone = false)
    {
        $this->description = $description;
        $this->sDone = $isDone;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

    }

    public function getIsDone()
    {
        return $this->isDone;
    }

    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

    }
}