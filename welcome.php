<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>






    <?php
$gender = $_POST['gender'];

if ($gender == 'male') {
    $salutation = 'Mr.';
} else {
    $salutation = 'Miss';
}
?>
    <div class="container mt-5">
        <h1>Welcome <?php echo $salutation; ?> <?php echo $_POST['firstName']; ?> <?php echo $_POST['lastName']; ?>!
        </h1>
        <p>Your information:</p>
        <ul>
            <li><strong>Address:</strong> <?php echo $_POST['address']; ?></li>
            <li><strong>Country:</strong> <?php echo $_POST['country']; ?></li>
            <li><strong>Gender:</strong> <?php echo $_POST['gender']; ?></li>
            <li><strong>Skills:</strong> <?php echo implode(", ",$_POST['skills']); ?></li>
            <li><strong>Username:</strong> <?php echo $_POST['username']; ?></li>
            <li><strong>Password:</strong> <?php echo $_POST['password']; ?></li>
            <li><strong>Department:</strong> <?php echo $_POST['department']; ?></li>
        </ul>
    </div>
</body>

</html>