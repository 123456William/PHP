<?php
$con = mysqli_connect('localhost', 'root', '', 'PHP');
if ($con) {

    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($con, $sql);
    $i = 1;
?>
    <table border="3px" bgcolor="lightgray">
        <tr>    
            <th>sn</th>
            <th>name</th>
            <th>email</th>
            <th>address</th>
            <th>contact</th>
            <th>action</th>
        </tr>


        <?php
        while ($row = mysqli_fetch_array($result)) {

        ?>

            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td>
                    <a href="edit.php?edit=<?php echo $row['id']; ?> ">Edit</a>
                    <a href="delete.php?delete=<?php echo $row['id']; ?> ">Delete</a>
                </td>

            </tr>



        <?php



        }
        ?>
    </table>

<?php
}

?>