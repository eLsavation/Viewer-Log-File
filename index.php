<?php
// index.php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewer Log File</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Viewer Log File</h1>
        <p class="footer-text">
            made with ❤️ by 
            <a href="https://github.com/eLsavation" style="color: #00ff00;" target="_blank" rel="noopener noreferrer">
                eLsavation
            </a>
        </p>
        <div class="log-list">
    <?php foreach ($logFiles as $file): ?>
        <div class="log-item" id="logItem_<?php echo $file; ?>">
            <span><?php echo htmlspecialchars($file); ?></span>
            <button class="view-button" onclick="toggleLogContent('<?php echo $file; ?>');">View</button>
        </div>
        <div class="log-content" id="content_<?php echo $file; ?>" style="display: none;">
            <!-- Konten log akan ditampilkan di sini -->
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>