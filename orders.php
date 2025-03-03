<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Connection failed');

// Handle deletion
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM contact_form WHERE id = $id");
    header('Location: orders.php');
    exit;
}

// Fetch contact_form from the database
$result = mysqli_query($conn, "SELECT * FROM contact_form");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact_form List</title>
       <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/favicon.png"/>
    <style>
        .action-btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="index.html" class="logo">dental<span>Clinic.</span></a>

         <nav class="nav">
        <a href="index.html#home">home</a>
        <a href="index.html#video">video</a>
        <a href="index.html#about">about</a>
        <a href="index.html#services">services</a>
        <a href="index.html#reviews">reviews</a>
        </nav>

         <a href="contact.php" class="link-btn">make appointment</a>
         <a href="orders.php" class="link-btn">check orders</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>
<br><br><br><br>
<div class="container mt-5">
    <h1 class="mb-4">contact_form List</h1>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary action-btn">Edit</a>
                        <a href="orders.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger action-btn" onclick="return confirm('Are you sure you want to delete this appointment?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
