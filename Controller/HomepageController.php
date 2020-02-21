<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $POST)
    {
        $allPosts = [];
        $verter = new Verter();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_SESSION['guestbook'])) {
                $guestbook = $_SESSION['guestbook'];
            } else {
                $guestbook = new Guestbook();
            }

            // Convert post to an Object
            $POST['time'] = time();
            $userPost = new Post(htmlspecialchars($POST['title']), htmlspecialchars($POST['name']),
                htmlspecialchars($POST['textArea']), $POST['time']);

            // push to guestbook
            $guestbook->setPosts($userPost);

            $allPosts = $guestbook->getPosts();

            $verter->convertToJson($allPosts);
            $_SESSION['guestbook'] = $guestbook;
        }

        //load the view
        require 'View/homepage.php';
    }
}