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
    <li>
        <a href="<?php echo $_ENV['HOME_URL']."film/".$film->getEpisodeId()?>"><?php echo $film->getTitle(); ?></a></li>
<?php } ?>
</ul>
