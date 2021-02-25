<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Post
{

    private string $title;
    private string $content;
    private string $name;
    private $date;


    public function __construct(string $title, string $content, string $name)
    {
        $this->title = $title;
        $this->content = $content;
        $this->name = $name;

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
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    public function returnDate()
    {
        return $this->date;
    }


}