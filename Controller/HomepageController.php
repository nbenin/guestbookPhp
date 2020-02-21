<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $POST)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $title = $POST['title'];
            $name = $POST['name'];
            $content = $POST['textArea'];

            $userPost = new Post($title, $name, $content);
            var_dump($userPost);

            $converter = new Converter();
            $convertedInput = $converter->convertToJson($POST);

            var_dump($convertedInput);
        }

        //load the view
        require 'View/homepage.php';
    }
}