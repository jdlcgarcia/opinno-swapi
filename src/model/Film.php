<?php

namespace OpinnoSwapi\model;

use DateTime;

class Film
{
    /** @var int */
    private $id;

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
    private $specieList;

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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
    public function setCharacterList($characterList)
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
    public function setCreated(DateTime $created)
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
    public function setDirector(string $director)
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
    public function setEdited(DateTime $edited)
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
    public function setEpisodeId(int $episodeId)
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
    public function setOpeningCrawl(string $openingCrawl)
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
    public function setPlanetList($planetList)
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
    public function setProducerList($producerList)
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
    public function setReleaseDate(DateTime $releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return Specie[]
     */
    public function getSpecieList(): array
    {
        return $this->specieList;
    }

    /**
     * @param Specie[] $specieList
     */
    public function setSpecieList($specieList)
    {
        $this->specieList = $specieList;
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
    public function setStarshipList($starshipList)
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
    public function setTitle(string $title)
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
    public function setUrl(string $url)
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
    public function setVehicleList(array $vehicleList)
    {
        $this->vehicleList = $vehicleList;
    }

    /**
     * @param Character $character
     */
    public function addCharacter(Character $character)
    {
        $this->characterList[] = $character;
    }

    public function addPlanet(Planet $planet)
    {
        $this->planetList[] = $planet;
    }

    public function addStarship(Starship $starship)
    {
        $this->starshipList[] = $starship;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->vehicleList[] = $vehicle;
    }

    public function addSpecie(Specie $specie)
    {
        $this->specieList[] = $specie;
    }


}