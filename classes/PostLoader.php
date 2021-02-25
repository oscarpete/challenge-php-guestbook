<?php
declare(strict_types=1);


class PostLoader
{
    private array $post;

    function __construct($title, $time, $content, $name)
    {
        $this->post = array('title' => $title, 'time' => $time, 'content' => $content, 'name' => $name);
    }
}