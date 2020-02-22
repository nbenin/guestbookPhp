<?php
declare(strict_types = 1);

class Guestbook {

    private $posts = [];

    // Getters
    public function getPosts() : array {
        return $this->posts;
    }

    // Json Loop
    public function makeObjs(array $invertedJson) {
        foreach($invertedJson as $json) {
            $userPost = new Post(htmlspecialchars($json['name']), htmlspecialchars($json['title']),
                htmlspecialchars($json['content']), $json['time']);
            $this->setPosts($userPost);
        }
    }

    // Set posts
    private function setPosts($info) {
        array_unshift($this->posts, $info);
        if (count($this->posts) >= 20) {
            array_pop($this->posts);
        }
    }
}