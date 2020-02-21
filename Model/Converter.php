<?php
declare(strict_types=1);

class Converter {
    public function convertToJson ($postInput) {
        return json_encode($postInput);
    }
}