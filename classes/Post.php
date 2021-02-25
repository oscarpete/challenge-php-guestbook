<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Post
{

    private string $title;
    private string $content;
    private string $author;
    private DateTimeImmutable $date;


    public function __construct(string $title, string $content, string $author, DateTimeImmutable $date){
        $this->title = $_POST['title'];
        $this->content= $_POST['content'];
        $this->author= $_POST['name'];

    }

    /**
     * @return mixed|string
     */
    public function getTitle(): mixed
    {
        return $this->title;
    }

    /**
     * @param mixed|string $title
     */
    public function setTitle(mixed $title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed|string
     */
    public function getContent(): mixed
    {
        return $this->content;
    }

    /**
     * @param mixed|string $content
     */
    public function setContent(mixed $content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed|string
     */
    public function getAuthor(): mixed
    {
        return $this->author;
    }

    /**
     * @param mixed|string $author
     */
    public function setAuthor(mixed $author): void
    {
        $this->author = $author;
    }

    public function getDate()
    {
        return $this->date;
    }






}