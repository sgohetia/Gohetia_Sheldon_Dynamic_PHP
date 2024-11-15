<?php
require_once('includes/connect.php');

// Fetch the specific employee details based on the `id` passed in the URL
$query = 'SELECT * FROM employees INNER JOIN jobs ON employees.job_id = jobs.id WHERE employees.id = ' .$_GET['id'];

$results = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($results);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="css/main.css" />
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<header class="bg-red-600 text-white text-center py-4">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-bold">Employee's Details</h1>
    </div>
</header>
<main class="e-details">
    <section class="profile-card">
        <img src="images/<?php echo $row['image']; ?>" alt="Profile Image">
        <div class="profile-details">
            <h2 class="text-2xl font-bold text-gray-600 mb-4"><?php echo $row['fname'] . ' ' . $row['lname']; ?></h2>
            <p class="text-xl font-bold text-red-600"><?php echo $row['title']; ?></p>
            <br>
            <p class="text-1xl font-normal text-gray-800"><?php echo $row['role']; ?></p>
        </div>
    </section>
</main>
<div class="back-button">
        <a href="index.php" class="inline-block bg-red-600 text-white py-2 px-6 rounded hover:bg-red-400">
            Go back
        </a>
    </div>

<footer class="bg-red-600 text-white text-center py-4 mt-8">
<p class="text-1xl font-bold">Powered by &#169; Sheldon P. Gohetia</p>
</footer>

</body>
</html>
