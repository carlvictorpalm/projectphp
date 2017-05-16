<?php
require ('header.php');

?>
<br>
<div class="col-lg-12 col-md-12 col-sm-12">
<form action="../index.php?page=create" method="post">
    <div class="form-group">
        <input type="hidden" name="id">
    </div>
    <div class="form-group">
        <label for="title">Title: </label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="stars">Stars: </label>
        <input type="text" name="stars" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="director">Director: </label>
        <input type="text" name="director" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="year">Year: </label>
        <input type="text" name="year" class="form-control" required>
    </div>
    <br>
    <button class ="button" type="submit" name="save" id="save" >Save Movie</button>
</form>
</div>
<br>

<?php

require ('footer.php');

?>

