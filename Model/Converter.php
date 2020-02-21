<?php
declare(strict_types=1);

class Verter {

    // Convert post to Json and store
    public function convertToJson (array $postInput) : string {
        $this->writeToJson(json_encode($postInput));
        return json_encode($postInput);
    }
    private function writeToJson($json) {
        file_put_contents('/var/www/guestbookPhp/Assets/Json/data.json', $json);
    }

    // Invert the Json
    public function invertFromJson() : array {
        $allPosts = $this->readFromJson();
        return json_decode($allPosts, true);
    }
    private function readFromJson() : string {
        return file_get_contents('/var/www/guestbookPhp/Assets/Json/data.json');
    }

}