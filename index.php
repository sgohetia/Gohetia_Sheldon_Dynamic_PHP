<?php
// Connect to the running database server and the specific database
require_once('includes/connect.php');

// Create a query to run in SQL
$query = 'SELECT employees.id AS employees, fname, lname, image, thumb, title FROM employees INNER JOIN jobs ON employees.job_id = jobs.id ORDER BY title ASC LIMIT 5';

// Run the query to get back the content
$results = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profiles</title>
    <link rel="stylesheet" href="css/main.css" />
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header class="bg-red-600 text-white text-center py-4">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-bold">Employee's Directory</h1>
    </div>
    <br>
</header>
<div class="bg-white text-gray text-center py-4">
    <div class="max-w-6xl mx-auto px-4">
    <p class="text-1xl font-normal text-gray-700">
            Welcome to our Employee Directory—a showcase of our talented team members who drive our company forward. 
            Here, you'll find profiles of key individuals from various departments, including leadership, marketing, and sales. 
            Get to know the faces behind our success and discover the expertise that powers our organization. <br> ⭐⭐⭐⭐⭐
        </p>
    </div>
</div>

<main class="max-w-7xl mx-auto p-8">
    <section class="e-profiles">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <div class="bg-white rounded-md shadow-md overflow-hidden">
                    <a href="details.php?id=<?php echo $row['employees']; ?>">
                        <img class="h-48 w-full object-cover" src="images/<?php echo $row['thumb']; ?>" alt="Profile Picture">
                    </a>
                    <div class="p-4">                  
                        <a href="details.php?id=<?php echo $row['employees']; ?>" class="block mt-1 text-lg leading-tight font-medium text-center text-black hover:underline">
                            <?php echo $row['fname'] . ' ' . $row['lname']; ?>
                        </a>
                        <div class="tracking-wide text-sm text-red-500 text-center font-semibold">
                            <?php echo $row['title']; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</main>

<footer class="bg-red-600 text-white text-center py-4 mt-8">
<p class="text-1xl font-bold">Powered by &#169; Sheldon P. Gohetia</p>
</footer>

</body>
</html>
