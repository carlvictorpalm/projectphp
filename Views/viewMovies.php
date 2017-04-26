<?php
/* @var Controller $this */
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
        foreach ($this->getMovie() as $row) {
            /* @var Movies $row */
            ?>
            <tr>
                <td><?= $row->getTitle(); ?></td>
                <td><?= $row->getStars(); ?></td>
                <td><?= $row->getDirector(); ?></td>
                <td><?= $row->getYear(); ?></td>
                <td>
                    <button class="btn btn-default" name="btn-edit" id="edit"><a
                                href="Views/update.php?edit_id=<?php echo $row->getId(); ?>">Update Movie</a></button>
                </td>
                <td>
                    <form action="index.php" method="post">
                        <input type="hidden" name="delete" value="<?php echo $row->getId(); ?>"/>
                        <button type="submit" class="btn btn-default" name="btn-delete">Delete Movie</button>
                    </form>
                </td>
            </tr>
        <?php } ?>

        <tr>
            <th colspan="8" align="right">
                <button class="btn btn-default" name="btn-create" id="create"><a href="Views/create.php">Create New Movie</a>
                </button>
            </th>
        </tr>

    </table>

<?php
require('Views/footer.php');
?>