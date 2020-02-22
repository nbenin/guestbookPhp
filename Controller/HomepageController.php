<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $POST)
    {
        $allPosts = [];
        $verter = new Verter();
        $guestbook = new Guestbook();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Convert posts to an Object
            $invertedJson = $verter->invertFromJson();
            $POST['time'] = time();
            array_push($invertedJson, $POST);
            $guestbook->makeObjs($invertedJson);
            $allPosts = $guestbook->getPosts();
            $verter->convertToJson($allPosts);

        }

        //load the view
        require 'View/homepage.php';
    }
}