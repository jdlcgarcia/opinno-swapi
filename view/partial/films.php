<?php

use OpinnoSwapi\model\Film;
use OpinnoSwapi\service\FormatService;

/**
 * @var $filmList Film[]
 * @var $searchQuery string
 */
$h2 = "All Star Wars films";
if ($searchQuery != "") {
    $h2 = "Films with '" . $searchQuery . "' in the title:";
}
?>
<h2><?php echo $h2 ?></h2>
<div id="filmList">
    <?php
    foreach ($filmList as $film) { ?>
        <article class="movieCard">
            <span class="episode"><?php echo FormatService::romanNumerals($film->getEpisodeId()) ?></span>
            <div class="info">
                <h3><?php echo $film->getTitle(); ?></h3>
                <span>Year: <?php echo $film->getReleaseDate()->format('Y'); ?></span>
                <span>Director: <?php echo $film->getDirector(); ?></span>
                <span class="crawl"><?php echo FormatService::firstWords($film->getOpeningCrawl(), 50); ?>&hellip;</span>
            </div>
            <a href="<?php echo $_ENV['HOME_URL'] . "film/" . $film->getEpisodeId() ?>">Details</a>
        </article>
    <?php } ?>
</div>
