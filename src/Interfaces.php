<?php


interface Logger
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump("log the message to a file: {$message}");
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump("log the message to a database: {$message}");
    }
}

// ...

class UsersController
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'JohnDoe';
        $this->logger->execute($user);
        // log this information
    }
}
$controller = new UsersController(new LogToDatabase());
//$controller->show();



interface Animal
{
    public function communicate();
}

class Dog implements Animal
{
    public function communicate()
    {
        return 'woof';
    }
}

class Cat implements Animal
{
    public function communicate()
    {
        return 'meow';
    }
}

