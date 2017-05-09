<?php
require ('header.php');
/* @var Movies $movies */
?>
    <br>

    <form action="../index.php?page=update" method="post">
        <div>
            <input type="hidden" name="id" value="<?= $movies->getId() ?>">
        </div>
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="<?php echo $movies->getTitle(); ?>">
        </div>
        <div>
            <label for="stars">Stars: </label>
            <input type="text" name="stars" id="stars" value="<?php echo $movies->getStars(); ?>">
        </div>
        <div>
            <label for="director">Director: </label>
            <input type="text" name="director" id="director" value="<?php echo $movies->getDirector(); ?>">
        </div>
        <div>
            <label for="year">Year: </label>
            <input type="text" name="year" id="year" value="<?php echo $movies->getYear(); ?>">
        </div>
        <br>
        <button type="submit" name="update" id="update">Update</button>
    </form>

    <br>
    <br>
<?php

require ('footer.php');

?>