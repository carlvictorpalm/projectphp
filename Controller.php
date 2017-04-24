<?php

/**
 * Created by PhpStorm.
 * User: Victorious
 * Date: 2017-04-19
 * Time: 13:45
 */
class Controller
{
    private $model;

    function __construct(PDO $db)
    {
        $this->model = new Model();
    }

    public function index()
    {
        $model = new Model();

        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($page))
            require_once('/view/viewMovie.php');
        elseif ($page === "albums") {
            $movies = $model->getMovie();
            // kolla $albums är en array
            require_once('/view/viewMovies.php');
        } else
            require_once('/Templates/Start.php');

    }


}