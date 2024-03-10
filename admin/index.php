<?php
include("templates/header.php");
?>

<div class="posts-list w-100 p-5">
    <table class="table tabled-bordered">
        <thead>
            <tr>
                <th style="width:15%;">Publication Date</th>
                <th style="width:15%;">Title</th>
                <th style="width:45%;">Article</th>
                <th style="width:25%;">Action</th>
            </tr>

        <tbody>
           
                <?php
                include("../connect.php");
                $sqlSelect = " SELECT * FROM posts ";
                $result    = mysqli_query($conn, $sqlSelect);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                 <tr>
                    <td>
                        <?php echo $data["date"] ?>
                    </td>
                    <td>
                        <?php echo $data["title"] ?>
                    </td>
                    <td>
                        <?php echo $data["summary"] ?>
                    </td>
                    <td>
                        <a class="btn btn-info" href="view.php?id=<?php echo $data["id"] ?>">View</a>
                        <a class="btn btn-warning" href="edit.php?id=<?php echo $data["id"] ?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"] ?>">Delete</a>


                    </td>
                <?php
                };
                ?>
            </tr>



        </tbody>

    </table>

</div>

<?php

include("templates/footer.php");
?>