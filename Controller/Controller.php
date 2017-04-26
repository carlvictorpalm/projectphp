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
            require_once('Views/viewMovies.php');
        elseif ($page === "albums") {
            $movies = $this->model->getMovie();
            // kolla $albums är en array
            require_once('Views/viewMovies.php');
        } else
            require_once('Views/start.php');

    }



}