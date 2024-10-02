<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clock</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Link to external JavaScript -->
    <script src="./assets/js/clock.js" defer></script>
    <script src="./assets/js/sidebar.js" defer></script>
</head>
<body class="flex flex-col items-center justify-between min-h-screen bg-gradient-to-r from-blue-800 via-purple-800 to-pink-800 transition-all dark:bg-gray-900 dark:text-gray-100">

    <!-- Header -->
    <?php require './views/header.php'; ?>

    <!-- Main Content (Clock) -->
    <main class="flex-grow flex flex-col items-center justify-center">
        <?php require './views/clock.php'; ?>
    </main>

    

    <!-- Footer -->
    <?php require './views/footer.php'; ?>

</body>
</html> 