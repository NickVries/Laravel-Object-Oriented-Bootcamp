<?php

class Task
{
    public $description;

    public $title;

    public $completed;

    public function __construct($title, $completed = false, $description)
    {
        $this->description = $description;
        $this->completed = $completed;
        $this->title = $title;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', false, 'Learn the basics of OOP.');

$task->complete();

var_dump($task);