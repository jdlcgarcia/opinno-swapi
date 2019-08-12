<?php
/**
 * @var $view string
 * @var $title string
 */

if (!isset($title)) {
    $title = $_ENV['TITLE'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title ?></title>
</head>
<body>
    <?php include_once("partial/".$view.".php"); ?>
</body>
</html>
