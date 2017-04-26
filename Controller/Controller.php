<?php
/*  */


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
        }
        elseif ($page === "create"){
            require ('Views/create.php');
        }
        elseif ($page === "update.php"){
            require ('Views/update.php');
        }
        else {
            require_once('Views/start.php');
        }


}




    public function getMovie()
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