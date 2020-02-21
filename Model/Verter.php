<?php
declare(strict_types=1);

class Verter {

    // Convert post to Json and store
    public function convertToJson (array $postInput) : string {
        $writeableArray = $this->serialize($postInput);
        $this->writeToJson(json_encode($writeableArray, JSON_PRETTY_PRINT));
        return json_encode($writeableArray);
    }
    private function writeToJson($json) {
        file_put_contents('/var/www/guestbookPhp/Assets/Json/data.json', $json);
    }

    // Serialize array of arrays
    private function serialize(array $arrayOfObj) : array {
        $newArray= [];
        foreach($arrayOfObj as $obj) {
            $smallArray = [
                'name'  => $obj->getName(),
                'title' => $obj->getTitle(),
                'time' => $obj->getTime(),
                'content' => $obj->getContent()
                ];
            array_push($newArray, $smallArray);
        }
        return $newArray;
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