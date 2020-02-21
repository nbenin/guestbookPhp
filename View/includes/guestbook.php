<div class="container">
<?php foreach($allPosts as $guest) {
        echo '<p><strong>' . $guest->getTitle() . '</strong></p>';
        echo '<p>By: ' . $guest->getName() . '.  This Post was made on: ' . date("d-m-y", $guest->getTime()) . ' at: ' . date("h:i:s", $guest->getTime()) . '</p>';
        echo '<p>' . $guest->getContent() . '</p>';
    } ?>
</div>