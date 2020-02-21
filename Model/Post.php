<?php
declare(strict_types = 1);

class Post {

    private $name;
    private $title;
    private $content;
    private $date;

    public function __construct(string $name, string $title, string $content, int $date)
    {
        $this->name = $name;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
    }

    // Getters
    public function getName() : string {
        return $this->name;
    }
    public function getTitle() : string {
        return $this->title;
    }
    public function getDate() : int {
        return $this->date;
    }
    public function getContent() : string{
        return $this->content;
    }

}