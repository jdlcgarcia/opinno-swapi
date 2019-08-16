<?php
use OpinnoSwapi\model\Film;
/**
 * @var $filmList Film[]
 */
?>
<h1>Star Wars Films</h1>
<ul>
<?php
foreach($filmList as $film) {?>
    <li><?php echo $film->getTitle(); ?></li>
<?php } ?>
</ul>
