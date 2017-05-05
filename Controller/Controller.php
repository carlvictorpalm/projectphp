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
            //$this->getMovie();
            require('Views/viewMovies.php');
        }
        elseif ($page === "create"){
            //$this->createMovie($title, $stars, $director, $year);
            require ('Views/create.php');
        }
        elseif ($page === "update"){
            //$this->updateMovie($id, $title, $stars, $director, $year);
            require ('Views/update.php');
        }
        else {
            require('Views/start.php');
        }
}

    public function getMovies()
    {
        return $this->model->getMovie();
    }
    public function updateMovie($id, $title, $stars, $director, $year){
        return $this->model->updateMovie($id, $title, $stars, $director, $year);
    }
    public function deleteMovie($id){
        return $this->model->deleteMovie($id);
    }
    public function createMovie($title, $stars, $director, $year){
        return $this->model->createMovie($title, $stars, $director, $year);
    }
}