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
            require('view/start.php');
        elseif ($page === "show") {
            require('view/viewMovies.php');
        } elseif ($page === "create") {

            if (isset($_POST['save'])) {
                $movies = new Movie();
                $movies->setTitle($_POST['title']);
                $movies->setStars($_POST['stars']);
                $movies->setDirector($_POST['director']);
                $movies->setYear($_POST['year']);
                $success = $this->saveMovie($movies);
                header ('Location: /index.php?page=show');
                exit();
            }

            require('view/create.php');
        } elseif ($page === "update") {
            if (isset($_GET['id'])){
                $id = $_GET['id'];
                $movies = $this->getId($id);
                require('view/update.php');
            }
            if (isset($_POST['update'])){
                $movies = new Movie();
                $movies->setId($_POST['id']);
                $movies->setTitle($_POST['title']);
                $movies->setStars($_POST['stars']);
                $movies->setDirector($_POST['director']);
                $movies->setYear($_POST['year']);
                $update_success = $this->editMovie($movies);
                header ('Location: /index.php?page=show');
                exit();
            }

        } elseif ($page === "delete") {
            $id = $_GET['id'];
            $this->deleteMovie($id);
            header('Location: /index.php?page=show');
            exit();

        } else {
            require('view/start.php');
        }
    }

    public function getMovies()
    {
        return $this->model->getMovies();
    }

    public function editMovie(Movie $movies)
    {
        return $this->model->updateMovie($movies);
    }

    public function deleteMovie($id)
    {
        return $this->model->deleteMovie($id);
    }

    public function saveMovie(Movie $movies)
    {
        return $this->model->createMovie($movies);
    }

    public function getId($id)
    {
        return $this->model->editMovieById($id);
    }



}