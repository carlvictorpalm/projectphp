<?php
require ('header.php');

?>
<br>
<form action="../index.php?page=create" method="post">
    <div class="form-group">
        <label for="title">Title: </label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
    </div>
    <div class="form-group">
        <label for="title">Stars: </label>
        <input type="text" name="stars" class="form-control" id="stars" placeholder="Stars" required>
    </div>
    <div class="form-group">
        <label for="altTitle">Director: </label>
        <input type="text" name="director" class="form-control" id="director" placeholder="Director">
    </div>
    <div class="form-group">
        <label for="year">Year: </label>
        <input type="text" name="year" class="form-control" id="year" placeholder="Year" required>
    </div>
    <br>
    <button type="submit" class="btn btn-default" name="insert" id="insert">Insert Movie</button>
</form>

<br>

<?php

require ('footer.php');

?>

