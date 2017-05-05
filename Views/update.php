<?php
require ('header.php');

?>
    <div class="container">
        <form action="update.php" method="post">

            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" name="title" class="form-control" id="title"
                       value="<?php echo $arrayMovie->getTitle(); ?>" required>
            </div>
            <div class="form-group">
                <label for="altTitle">Stars: </label>
                <input type="text" name="stars" class="form-control" id="stars" placeholder="Stars"
                       value="<?php echo $arrayMovie->getStars(); ?>">
            </div>
            <div class="form-group">
                <label for="altTitle">Director: </label>
                <input type="text" name="director" class="form-control" id="director" placeholder="Director"
                       value="<?php echo $arrayMovie->getDirector(); ?>">
            </div>
            <div class="form-group">
                <label for="year">Year: </label>
                <input type="text" name="year" class="form-control" id="year" value="<?php echo $arrayMovie->getYear(); ?>"
                       required>
            </div>
            <button type="submit" class="btn btn-default" name="btn-update">Update</button>
        </form>
    </div>
    <br>
<?php

require ('footer.php');

?>