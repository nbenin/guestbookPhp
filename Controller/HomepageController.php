<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $POST)
    {
        $verter = new Verter();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Convert post to an Object
            $userPost = new Post($POST['title'], $POST['name'], $POST['textArea']);

            // Add to Guestbook


            // Convert post to Json and store
            $verter->convertToJson($POST);
        }

        // Load guestbook
        $invertedInput = $verter->invertFromJson();
        $guestbook = new Guestbook();

        var_dump($invertedInput);

        //load the view
        require 'View/homepage.php';
    }
}