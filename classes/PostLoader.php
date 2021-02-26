<?php
declare(strict_types=1);


class PostLoader
{
    private array $post;

    function __construct($title, $time, $content, $name)
    {
        // this will create the content inside the JSON
        $this->post = array('title' => $title, 'time' => $time, 'content' => $content, 'name' => $name);
        $this->saveData();
    }

    function getData()
    {
        if (!empty(file_get_contents("post.json"))) {
            $data = file_get_contents("post.json");
            $data = json_decode($data);
            return $data;
        } else {
            return 0;
        }

    }

    function saveData()
    {
        $myData = [];
        $data = $this->getData();
        if ($data) {
            foreach ($data as $post) {
                array_push($myData, $post);
            }
        }
        array_push($myData, $this->post);
        // JSON_PRETTY_PRINT= show the json file in a vertical way, otherwise will show only one line
        file_put_contents("post.json", json_encode($myData, JSON_PRETTY_PRINT));
        return $myData;
    }

}