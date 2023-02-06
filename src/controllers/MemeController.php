<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Meme.php';
require_once __DIR__ . '/../repository/MemeRepository.php';

class MemeController extends AppController
{
    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $messages = [];
    private $memeRepository;

    public function __construct()
    {
        parent::__construct();
        $this->memeRepository = new MemeRepository();
    }

    public function memes()
    {
        $memes = $this->memeRepository->getMemes();
        $this->render('memes', ['memes' => $memes]);
    }

    public function AddMeme()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->Validate($_FILES['file'])) {

            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['file']['name']

            );

            $meme = new Meme($_POST['title'], $_POST['description'], $_FILES['file']['name']);
            $this->memeRepository->addMeme($meme);


            return $this->render('memes', [
                'memes' => $this->memeRepository->getMemes(),
                'messages' => $this->messages, 'meme' => $meme]);
        }

        $this->render('add-meme', ['messages' => $this->messages]);

    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if($contentType === "application/json"){
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->memeRepository->getMemeByTitle($decoded['search']));
        }
    }

    public function like(int $id){
        $this->memeRepository->like($id);
        http_response_code(200);
    }
    public function dislike(int $id){
        $this->memeRepository->dislike($id);
        http_response_code(200);
    }
    private function Validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->messages[] = 'File is too large.';
            return false;
        }

        if (!isset($file['type']) && !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->messages[] = 'Unsupported file type. Choose .png or .jpg file.';
            return false;
        }
        return true;
    }


}