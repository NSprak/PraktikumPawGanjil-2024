
<?php require_once 'Config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 6 PAW 2024 -vall</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <?php include __DIR__ . '/nav.php' ?>

    <div class="container mx-auto my-6 px-8">
        <?php 
            if (isset($content)) {
                echo $content;
            } else {
                echo "<p>Konten tidak tersedia.</p>";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>