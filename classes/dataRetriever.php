<?php
// retrieve the data from json file
function retrieveData() {
    if (file_get_contents("post.json")) {
        $data = file_get_contents("post.json");
        $data = json_decode($data, true);
        if (isset($data)) {
            $data = array_slice($data, -20, 20);
            return array_reverse($data);
        }
    }
}