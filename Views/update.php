<?php
require ('header.php');
/* @var Movies $movies */
?>
    <br>

    <form action="../index.php?page=update" method="post">
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="<?php echo $movies['title']; ?>" required>
        </div>
        <div>
            <label for="title">Stars: </label>
            <input type="text" name="stars" id="stars" value="<?php echo $movies['stars']; ?>">
        </div>
        <div>
            <label for="altTitle">Director: </label>
            <input type="text" name="director" id="director" value="<?php echo $movies['director']; ?>">
        </div>
        <div>
            <label for="year">Year: </label>
            <input type="text" name="year" id="year" value="<?php echo $movies['year']; ?>" required>
        </div>
        <br>
        <button type="submit" name="save" id="save">Insert Movie</button>
    </form>

    <br>
    <br>
<?php

require ('footer.php');

?>