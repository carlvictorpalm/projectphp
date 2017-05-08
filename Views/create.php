<?php
require ('header.php');

?>
<br>

<form action="../index.php?page=create" method="post">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title" id="title" placeholder="Title" required>
    </div>
    <div>
        <label for="title">Stars: </label>
        <input type="text" name="stars" id="stars" placeholder="Stars" required>
    </div>
    <div>
        <label for="altTitle">Director: </label>
        <input type="text" name="director" id="director" placeholder="Director">
    </div>
    <div>
        <label for="year">Year: </label>
        <input type="text" name="year" id="year" placeholder="Year" required>
    </div>
    <br>
    <button type="submit" name="save" id="save">Insert Movie</button>
</form>

<br>

<?php

require ('footer.php');

?>

