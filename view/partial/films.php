<?php

use OpinnoSwapi\model\Character;
use OpinnoSwapi\model\Film;
use OpinnoSwapi\service\SearchHistoryService;
use OpinnoSwapi\service\FormatService;

/**
 * @var $filmList Film[]
 * @var $characterList Character[]
 * @var $searchQuery string
 */
$h2 = "All Star Wars films";
if ($searchQuery != "") {
    $h2 = "Films with '" . $searchQuery . "' in the title:";
}
$searchHistory = SearchHistoryService::getSearchHistory();
if (sizeof($searchHistory) > 0) { ?>
    <section>
        <h5>Search history</h5>
        <ul>
            <?php foreach ($searchHistory as $searchTerm) { ?>
                <li><?php echo $searchTerm ?></li>
            <?php } ?>
        </ul>
    </section>
<?php } ?>
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
                <span class="crawl"><?php echo nl2br(FormatService::firstWords($film->getOpeningCrawl(),
                        50)); ?>&hellip;</span>
            </div>
            <a href="<?php echo $_ENV['HOME_URL'] . "film/" . $film->getId() ?>">Details</a>
        </article>
    <?php } ?>
</div>
<h2>Star Wars Characters</h2>
<div id="characterList">
    <?php foreach ($characterList as $character) { ?>
        <article>
            <h4><?php echo $character->getName(); ?></h4>
        </article>
    <?php } ?>
</div>
