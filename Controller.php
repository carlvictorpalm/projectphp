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

    function __construct()
    {
        $this->model = new Model();
    }

    public function index()
    {
        $model = new Model();

        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($page))
            require_once('view/viewMovie.php');
        elseif ($page === "albums") {
            $albums = $model->getMovies();
            // kolla $albums är en array
            require_once('view/viewMovies.php');
        } else
            require_once('templates/start.php');

    }


}