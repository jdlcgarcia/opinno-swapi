<?php

namespace OpinnoSwapi\model;

use DateTime;

class Film
{
    /** @var Character[] */
    private $characterList;

    /** @var DateTime */
    private $created;

    /** @var string */
    private $director;

    /** @var DateTime */
    private $edited;

    /** @var int */
    private $episodeId;

    /** @var string */
    private $openingCrawl;

    /** @var Planet[] */
    private $planetList;

    /** @var string[] */
    private $producerList;

    /** @var DateTime */
    private $releaseDate;

    /** @var Specie[] */
    private $speciesList;

    /** @var Starship[] */
    private $starshipList;

    /** @var string */
    private $title;

    /** @var string */
    private $url;

    /** @var Vehicle[] */
    private $vehicleList;

    /**
     * Film constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }


    /**
     * @return Character[]
     */
    public function getCharacterList(): array
    {
        return $this->characterList;
    }

    /**
     * @param Character[] $characterList
     */
    public function setCharacterList(array $characterList): void
    {
        $this->characterList = $characterList;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     */
    public function setCreated(DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getDirector(): string
    {
        return $this->director;
    }

    /**
     * @param string $director
     */
    public function setDirector(string $director): void
    {
        $this->director = $director;
    }

    /**
     * @return DateTime
     */
    public function getEdited(): DateTime
    {
        return $this->edited;
    }

    /**
     * @param DateTime $edited
     */
    public function setEdited(DateTime $edited): void
    {
        $this->edited = $edited;
    }

    /**
     * @return int
     */
    public function getEpisodeId(): int
    {
        return $this->episodeId;
    }

    /**
     * @param int $episodeId
     */
    public function setEpisodeId(int $episodeId): void
    {
        $this->episodeId = $episodeId;
    }

    /**
     * @return string
     */
    public function getOpeningCrawl(): string
    {
        return $this->openingCrawl;
    }

    /**
     * @param string $openingCrawl
     */
    public function setOpeningCrawl(string $openingCrawl): void
    {
        $this->openingCrawl = $openingCrawl;
    }

    /**
     * @return Planet[]
     */
    public function getPlanetList(): array
    {
        return $this->planetList;
    }

    /**
     * @param Planet[] $planetList
     */
    public function setPlanetList(array $planetList): void
    {
        $this->planetList = $planetList;
    }

    /**
     * @return string[]
     */
    public function getProducerList(): array
    {
        return $this->producerList;
    }

    /**
     * @param string[] $producerList
     */
    public function setProducerList(array $producerList): void
    {
        $this->producerList = $producerList;
    }

    /**
     * @return DateTime
     */
    public function getReleaseDate(): DateTime
    {
        return $this->releaseDate;
    }

    /**
     * @param DateTime $releaseDate
     */
    public function setReleaseDate(DateTime $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return Specie[]
     */
    public function getSpeciesList(): array
    {
        return $this->speciesList;
    }

    /**
     * @param Specie[] $speciesList
     */
    public function setSpeciesList(array $speciesList): void
    {
        $this->speciesList = $speciesList;
    }

    /**
     * @return Starship[]
     */
    public function getStarshipList(): array
    {
        return $this->starshipList;
    }

    /**
     * @param Starship[] $starshipList
     */
    public function setStarshipList(array $starshipList): void
    {
        $this->starshipList = $starshipList;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return Vehicle[]
     */
    public function getVehicleList(): array
    {
        return $this->vehicleList;
    }

    /**
     * @param Vehicle[] $vehicleList
     */
    public function setVehicleList(array $vehicleList): void
    {
        $this->vehicleList = $vehicleList;
    }


}