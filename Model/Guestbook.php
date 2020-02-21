<?php
declare(strict_types = 1);

class Guestbook {

    private $posts = [];

    // Getters
    public function getPosts() : array {
        return $this->posts;
    }

    // Set posts
    public function setPosts($info) {
        array_unshift($this->posts, $info);
        if (count($this->posts) >= 20) {
            array_pop($this->posts);
        }
    }
}