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
            SELECT * FROM memes;
        ');
        $stmt->execute();
        $memes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($memes as $meme) {
            $result[] = new Meme(
                $meme['title'],
                $meme['description'],
                $meme['image']
            );
        }

        return $result;
    }
}