<?php
declare(strict_types=1);

class Converter {
    public function convertPost ($postInput) {
        return json_encode($postInput);
    }
}