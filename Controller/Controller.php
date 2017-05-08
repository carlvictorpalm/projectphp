<?php

class Controller
{
    private $model;

    function __construct(PDO $db)
    {
        $this->model = new Model($db);
    }

    public function index()
    {
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($page))
            require('Views/start.php');
        elseif ($page === "show") {
            require('Views/viewMovies.php');
        } elseif ($page === "create") {

            require('Views/create.php');
        } elseif ($page === "update") {

            $id = $_GET['id'];
            $this->editMovie($id);
            require('Views/update.php');

        } elseif ($page === "delete") {
            $id = $_GET['id'];
            $this->deleteMovie($id);
            header('Location: /index.php?page=show');
            exit();

        } else {
            require('Views/start.php');
        }
    }

    public function getMovies()
    {
        return $this->model->getMovie();
    }

    public function updateMovie($id, $title, $stars, $director, $year)
    {
        return $this->model->updateMovie($id, $title, $stars, $director, $year);
    }

    public function deleteMovie($id)
    {
        return $this->model->deleteMovie($id);
    }

    public function createMovie($title, $stars, $director, $year)
    {
        return $this->model->createMovie($title, $stars, $director, $year);
    }

    public function editMovie($id)
    {
        return $this->model->editMovie($id);
    }
}