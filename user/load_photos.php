<?php
include('../includes/db.php');

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 5; // Number of photos per page
$offset = ($page - 1) * $limit;

$stmt = $pdo->prepare("SELECT * FROM photos WHERE status = 'active' LIMIT ? OFFSET ?");
$stmt->execute([$limit, $offset]);
$photos = $stmt->fetchAll();

foreach ($photos as $photo) {
    echo "<div>";
    echo "<img src='" . $photo['file_path'] . "' alt='" . $photo['title'] . "'>";
    echo "<p>" . $photo['title'] . "</p>";
    echo "<p>" . $photo['description'] . "</p>";
    echo "<p>Price: $" . $photo['price'] . "</p>";
    echo "</div>";
}
echo "HI";
?>
