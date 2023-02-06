<?php

class Meme
{
    private $title;
    private $description;
    private $image;
    private $like;
    private $dislike;
    private $id;

    public function __construct($title, $description, $image, $like = 0, $dislike = 0, $id=null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->like = $like;
        $this->dislike = $dislike;
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getLike()
    {
        return $this->like;
    }

    public function setLike($like): void
    {
        $this->like = $like;
    }

    public function getDislike()
    {
        return $this->dislike;
    }

    public function setDislike($dislike): void
    {
        $this->dislike = $dislike;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }


}