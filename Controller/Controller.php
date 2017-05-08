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
            if (isset($_GET['id'])){
                $id = $_GET['id'];
                $movies = $this->getId($id);
                require('Views/update.php');
            }
            elseif (isset($_GET['update'])){
                $movies = new Movies();
                $movies->setId($_GET['id']);
                $movies->setTitle($_GET['title']);
                $movies->setStars($_GET['stars']);
                $movies->setDirector($_GET['director']);
                $movies->setYear($_GET['year']);
                $update_success = $this->editMovie($movies);
                require ('Views/viewMovies.php');
            }

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

    public function editMovie(Movies $movies)
    {
        return $this->model->updateMovie($movies);
    }

    public function deleteMovie($id)
    {
        return $this->model->deleteMovie($id);
    }

    public function createMovie(Movies $movies)
    {
        return $this->model->createMovie($movies);
    }

    public function getId($id)
    {
        return $this->model->editMovieById($id);
    }
}