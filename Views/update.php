<?php
require ('header.php');
/* @var Movies $movies */
?>
    <br>
<div class="col-lg-12 col-md-12 col-sm-12">
    <form action="../index.php?page=update" method="post">
        <div class="form-group">
            <input type="hidden" name="id"  value="<?= $movies->getId() ?>">
        </div>
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" name="title" id="title" value="<?php echo $movies->getTitle(); ?>">
        </div>
        <div class="form-group">
            <label for="stars">Stars: </label>
            <input type="text" class="form-control" name="stars" id="stars" value="<?php echo $movies->getStars(); ?>">
        </div>
        <div class="form-group">
            <label for="director">Director: </label>
            <input type="text" class="form-control" name="director" id="director" value="<?php echo $movies->getDirector(); ?>">
        </div>
        <div class="form-group">
            <label for="year">Year: </label>
            <input type="text" class="form-control" name="year" id="year" value="<?php echo $movies->getYear(); ?>">
        </div>
        <br>
        <button type="submit" name="update" id="update">Update with new data</button>
    </form>
</div>
    <br>
    <br>
<?php

require ('footer.php');

?>