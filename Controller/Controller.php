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
            /*if (isset($_POST['save'])) {
                $movies = new Movies();
                $movies->setTitle($_POST['title']);
                $movies->setStars($_POST['stars']);
                $movies->setDirector($_POST['director']);
                $movies->setYear($_POST['year']);
                $success = $this->saveMovie($movies);
                exit();
            }*/

            require('Views/create.php');
        } elseif ($page === "update") {
            if (isset($_GET['id'])){
                $id = $_GET['id'];
                $movies = $this->getId($id);
                require('Views/update.php');
            }
            if (isset($_POST['update'])){
                $movies = new Movies();
                $movies->setId($_POST['id']);
                $movies->setTitle($_POST['title']);
                $movies->setStars($_POST['stars']);
                $movies->setDirector($_POST['director']);
                $movies->setYear($_POST['year']);
                $update_success = $this->editMovie($movies);
                echo "här är jag";

                header ('Location: /index.php?page=show');
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
        return $this->model->updateMovies($movies);
    }

    public function deleteMovie($id)
    {
        return $this->model->deleteMovie($id);
    }

    public function saveMovie(Movies $movies)
    {
        return $this->model->createMovie($movies);
    }

    public function getId($id)
    {
        return $this->model->editMovieById($id);
    }

}