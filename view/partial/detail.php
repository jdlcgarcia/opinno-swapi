<?php

use OpinnoSwapi\model\Film;
use OpinnoSwapi\service\FormatService;

/**
 * @var $film Film
 */
?>
<h2><?php echo $film->getTitle() ?></h2>
<div id="filmDetail">
    <span class="crawl">
        Episode <?php echo FormatService::romanNumerals($film->getEpisodeId()); ?><br/>
        <?php echo strtoupper($film->getTitle()); ?><br/><br/>
        <?php echo nl2br($film->getOpeningCrawl()); ?>
    </span>

    <div class="characters">
        <h3>Characters</h3>
        <ul>
            <?php foreach($film->getCharacterList() as $character) { ?>
                <li><?php echo $character->getName(); ?></li>
            <?php } ?>
        </ul>
    </div>

    <div class="info">
        <h3>Director</h3>
        <?php echo $film->getDirector(); ?>
        <h3>Producers</h3>
        <ul>
            <?php foreach($film->getProducerList() as $producer) {
                echo "<li>".$producer."</li>";
            } ?>
        </ul>
        <h3>Released date</h3>
        <?php echo FormatService::getNormalizedDate($film->getReleaseDate()); ?>

    </div>
</div>