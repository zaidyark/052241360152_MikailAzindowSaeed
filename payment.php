<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file for styling -->
</head>
<body>

<header>
    <h1>Payment Confirmation</h1>
</header>

<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <!-- Add more navigation links as needed -->
    </ul>
</nav>

<main>
    <section>
        <h2>Thank you for your payment!</h2>
        <p>Payment Type: <?php echo $_POST['payment_type']; ?></p>
        <p>Date: <?php echo $_POST['date']; ?></p>
        <p>Time: <?php echo $_POST['time']; ?></p>
        <p>Student Name: <?php echo $_POST['student_name']; ?></p>
        <p>Student ID: <?php echo $_POST['student_id']; ?></p>
        <!-- Process payment and display confirmation message -->
    </section>
</main>

<footer>
    <p>&copy; 2024 University Name. All rights reserved.</p>
</footer>

</body>
</html>
