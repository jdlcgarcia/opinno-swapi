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
    <div class="info">
        <p><span>Director:</span> <?php echo $film->getDirector(); ?></p>
        <p>
            <span>Producers:</span>
            <?php foreach($film->getProducerList() as $producer) {
                echo $producer."<br />";
            } ?>
        </p>
        <p><span>Created on:</span> <?php echo FormatService::getNormalizedDate($film->getCreated()); ?></p>
        <p><span>Edited on:</span> <?php echo FormatService::getNormalizedDate($film->getEdited()); ?></p>
        <p><span>Released on:</span> <?php echo FormatService::getNormalizedDate($film->getReleaseDate()); ?></p>
    </div>
</div>