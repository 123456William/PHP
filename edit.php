<?php
$con = mysqli_connect('localhost', 'root', '', 'PHP');
if ($con) {
    $id = $_REQUEST['edit'];


    $sql = "SELECT `id`, `name`, `email`, `address`, `contact` FROM `crud` WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 style="color: green;">Registration Form</h1>

                <form action="update.php" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="hidden" value="<?php echo $row['id']; ?>"  name="edit">
                        <input type="text" value="<?php echo $row['name']; ?>" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" value="<?php echo $row['email']; ?>" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" value="<?php echo $row['address']; ?>" class="form-control" name="address" placeholder=" Address">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" value="<?php echo $row['contact']; ?>" class="form-control" name="contact" placeholder="Contact">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>