<?php

class Model
{

    private $db;

    public function __construct(PDO $db)
    {

        $this->db = $db;

    }

    public function getMovie()
    {
        $stm_getMovie = $this->db->prepare('SELECT * FROM `movies`');
        $stm_getMovie->execute();
        $results = $stm_getMovie->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function deleteMovie($id)
    {
        $stm_deleteMovie = $this->db->prepare('DELETE FROM `movies` WHERE `id` = :id ');
        $stm_deleteMovie->execute([':id' => $id]);
        return $stm_deleteMovie;
    }

    public function createMovie(Movies $movies)
    {
        $stm_createMovie = $this->db->prepare('INSERT INTO `movies`( `title`, `stars`, `director`, `year`) VALUES (:title, :stars, :director, :year)');
        $stm_createMovie->execute(['id' => $movies->getId(), ':title' => $movies->getTitle(), ':stars' => $movies->getStars(), ':director' => $movies->getDirector(), ':year' => $movies->getYear()]);
        return $stm_createMovie;
    }

    public function updateMovies(Movies $movies)
    {
        $update_stm = $this->db->prepare('UPDATE `movies` SET title = :title, stars = :stars, director = :director, year = :year WHERE id = :id');
        return $update_stm->execute([':id' => $movies->getId(), ':title' => $movies->getTitle(), ':stars' => $movies->getStars(),':director' => $movies->getDirector(), ':year' => $movies->getYear()]);
    }

    public function editMovieById($id)
    {
        $stm_editMovie = $this->db->prepare('SELECT * FROM `movies` WHERE `id` = :id');
        $stm_editMovie->execute([':id' => $id]);
        $stm_editMovie->setFetchMode(PDO::FETCH_ASSOC);
        return new Movies($stm_editMovie->fetch());

    }
}
