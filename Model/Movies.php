<?php

/**
 * Created by PhpStorm.
 * User: Victorious
 * Date: 2017-04-19
 * Time: 13:48
 */
class Movies
{

private $title;
private $stars;
private $director;
private $year;


public function __construct( $title, $stars, $director, $year)
{

    $this->title=$title;
    $this->stars=$stars;
    $this->director=$director;
    $this->year=$year;



}

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param mixed $stars
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     */
    public function setDirector($director)
    {
        $this->director = $director;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

}