<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Connection failed');

// Get appointment data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM contact_form WHERE id = $id");
    $appointment = mysqli_fetch_assoc($result);
}

// Update appointment
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    mysqli_query($conn, "UPDATE contact_form SET name='$name', email='$email', number='$number', date='$date' WHERE id = $id");
    header('Location: orders.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Edit Appointment</h1>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $appointment['id']; ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $appointment['name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $appointment['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="number">Phone</label>
            <input type="text" class="form-control" name="number" value="<?php echo $appointment['number']; ?>" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="datetime-local" class="form-control" name="date" value="<?php echo date('Y-m-d\TH:i', strtotime($appointment['date'])); ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
