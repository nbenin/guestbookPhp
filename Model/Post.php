<?php
declare(strict_types = 1);

class Post {

    private $name;
    private $title;
    private $content;
    private $time;

    public function __construct(string $name, string $title, string $content, int $time)
    {
        $this->name = $name;
        $this->title = $title;
        $this->content = $content;
        $this->time = $time;
    }

    // Getters
    public function getName() : string {
        return $this->name;
    }
    public function getTitle() : string {
        return $this->title;
    }
    public function getTime(): int {
        return $this->time;
    }
    public function getContent() : string{
        return $this->content;
    }

}