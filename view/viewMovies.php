<?php
/* @var Controller $this */
require('header.php');
?>
    <h2>Victorious favorite movies</h2>
    <table class="table-striped">
        <tr>
            <th>Title</th>
            <th>Stars</th>
            <th>Director</th>
            <th>Year</th>
            <th></th>
            <th></th>

        </tr>
        <?php

        foreach ($this->getMovies() as $row) {
            /* @var Movie $row */
            ?>
            <tr>
                <td><?= $row['title']; ?></td>
                <td><?= $row['stars']; ?></td>
                <td><?= $row['director']; ?></td>
                <td><?= $row['year']; ?></td>
                <td>
                    <button class="btn btn-default" id="edit"><a
                                href="/index.php?page=update&id=<?php echo $row['id']; ?>">Update</a></button>
                </td>
                <td>
                    <button class="btn btn-default" id="delete"><a
                                href="/index.php?page=delete&id=<?php echo $row['id']; ?>">Delete</a></button>
                </td>
            </tr>
        <?php } ?>


    </table>

<?php
require('footer.php');
?>