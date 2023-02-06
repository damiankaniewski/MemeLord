<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Meme.php';

class MemeRepository extends Repository
{

    public function getMeme(int $id): ?Meme
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM meme WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $meme = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($meme == false) {
            return null;
        }

        return new Meme(
            $meme['title'],
            $meme['description'],
            $meme['image'],
            $meme['like'],
            $meme['dislike'],
            $meme['id']
        );
    }

    public function addMeme(Meme $meme): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('INSERT INTO memes(title,description,created_at,id_assigned_by,image)
VALUES (?,?,?,?,?)');
        $assignedById = 1;
        $stmt->execute([
            $meme->getTitle(),
            $meme->getDescription(),
            $date->format('Y-m-d'),
            $assignedById,
            $meme->getImage()
        ]);
    }
    public function getMemes(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM view_memes;
        ');
        $stmt->execute();
        $memes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($memes as $meme) {
            $result[] = new Meme(
                $meme['title'],
                $meme['description'],
                $meme['image'],
                $meme['like'],
                $meme['dislike'],
                $meme['id']
            );
        }

        return $result;
    }

    public function getMemeByTitle(string $searchString){
        $searchString = '%'.strtolower($searchString).'%';
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM memes WHERE LOWER(title) LIKE :search OR LOWER(description) LIKE :search
        ');
        $stmt->bindParam(':search',$searchString,PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function like(int $id){
        $stmt = $this->database->connect()->prepare('
        UPDATE memes SET "like" = "like" + 1 WHERE id = :id
        ');

        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }

    public function dislike(int $id){
        $stmt = $this->database->connect()->prepare('
        UPDATE memes SET "dislike" = "dislike" + 1 WHERE id = :id
        ');

        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }
}