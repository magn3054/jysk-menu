<?php
// Read the stored menu data
$menu = file_exists("menu.txt") ? file_get_contents("menu.txt") : "No menu available.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatted Menu</title>
    <style>
        body { font-family: Verdana, sans-serif; }
        .day { font-weight: bold; font-size: 1.2em; color: #00bfff; margin-top: 20px; margin-bottom: 5px; }
        .menu-item { margin: 0px 0px 0px 20px; color: #FAFAFA;}
      	.menu_item:first-of-type { margin: 10px 0px 0px 20px;}
    </style>
</head>
<body>
    <!-- <h2>Formatted Menu:</h2> -->
    <div id="output">
        <?php echo $menu; ?>
    </div>
</body>
</html>
