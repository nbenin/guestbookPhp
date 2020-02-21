<?php
declare(strict_types = 1);

class Guestbook {

    private $posts = [];

    // Getters
    public function getPost() : array {
        return $this->posts;
    }
}