<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menuData = $_POST['menu'] ?? '';

    // Save the formatted menu to a text file (or a database)
    file_put_contents("menu.txt", $menuData);

    echo "Menu saved successfully!";
} else {
    echo "Invalid request.";
}
?>
