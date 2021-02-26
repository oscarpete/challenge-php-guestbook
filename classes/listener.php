<?php

function listener(){
    if (isset($_POST['send'])) {
        if ($_POST['title'] && $_POST['content'] && $_POST['name']) {
            $visitorPost = new Post($_POST['title'], $_POST['content'], $_POST['name']);
            $title = $visitorPost->getTitle();
            $visitorPost->getDate(date("F j, Y, g:i a"));
            $time = $visitorPost->returnDate();
            $content = $visitorPost->getContent();
            $name= $visitorPost->getName();
            $loader = new Postloader($title, $time, $content, $name);
        }
    }
}