<?php
require ('header.php');

?>
<br>

<form action="../index.php?page=create" >
    <div>
        <input type="hidden" name="id">
    </div>
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="stars">Stars: </label>
        <input type="text" name="stars">
    </div>
    <div>
        <label for="director">Director: </label>
        <input type="text" name="director">
    </div>
    <div>
        <label for="year">Year: </label>
        <input type="text" name="year" required>
    </div>
    <br>
    <button type="submit" name="save" >Save Movie</button>
</form>

<br>

<?php

require ('footer.php');

?>

