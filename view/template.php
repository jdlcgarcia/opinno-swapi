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
    <meta charset="UTF-8"/>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo $_ENV['HOME_URL']; ?>/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
</head>
<body>
<nav class="main-nav">
    <ul>
        <li>
            <a href="<?php echo $_ENV['HOME_URL']; ?>">Home</a>
        </li>
    </ul>
    <div class="form">
        <input type="search" placeholder="Search" name="search" id="searchInput" onkeydown="buildSearchLink()"/>
        <a id="searchLink" href="<?php echo $_ENV['HOME_URL'] ?>search/" onclick="buildSearchLink()">
            Search
        </a>
    </div>
</nav>
<div id="content">
    <h1>
        <?php echo ucwords($_ENV['APP_TITLE']); ?>
    </h1>
<?php include_once("partial/" . $view . ".php"); ?>
</div>
<?php include_once("partial/footer.php"); ?>
</body>
<script type="text/javascript">
    function buildSearchLink()
    {
        var searchQuery = document.getElementById("searchInput").value
        document.getElementById("searchLink").href="<?php echo $_ENV['HOME_URL'] ?>search/"+searchQuery;
    }
</script>
</html>
