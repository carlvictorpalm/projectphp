<?php
/* @var Controller $this */
require ('header.php');
?>
    <h2>Victorious filmtop</h2>
    <table class="table-striped">
        <tr>
            <th>Title</th>
            <th>Stars</th>
            <th>Director</th>
            <th>Year</th>
        </tr>
        <?php

        foreach ($this->getMovies() as $row) {
            /* @var Movies $row */
            ?>
            <tr>
                <td><?= $row['title']; ?></td>
                <td><?= $row['stars']; ?></td>
                <td><?= $row['director']; ?></td>
                <td><?= $row['year']; ?></td>
                <td>
                    <button class="btn btn-default" name="btn-edit" id="edit"><a
                                href="/index.php?edit_id=<?php echo $row['id']; ?>">Update Movie</a></button>
                </td>
                 <td>
                    <form action="/index.php" method="post">
                        <input type="hidden" name="delete" value="<?php echo $row['id']; ?>"/>
                        <button type="submit" class="btn btn-default" name="btn-delete">Delete Movie</button>
                    </form>
                </td>
            </tr>
        <?php }

        ?>


    </table>

<?php
require('footer.php');
?>