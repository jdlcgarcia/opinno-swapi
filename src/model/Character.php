<?php


namespace OpinnoSwapi\model;


use DateTime;

class Character
{
    /** @var string */
    private $url;

    /** @var string */
    private $name;

    /** @var string */
    private $birthYear;

    /** @var string */
    private $eyeColor;

    /** @var string */
    private $gender;

    /** @var string */
    private $hairColor;

    /** @var string */
    private $height;

    /** @var string */
    private $mass;

    /** @var string */
    private $skinColor;

    /** @var string */
    private $homeworld;

    /** @var Film[] */
    private $films;

    /** @var Specie[] */
    private $species;

    /** @var Starship[] */
    private $starships;

    /** @var Vehicle[] */
    private $vehicles;

    /** @var DateTime */
    private $created;

    /** @var DateTime */
    private $edited;

    /**
     * Character constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getBirthYear(): string
    {
        return $this->birthYear;
    }

    /**
     * @param string $birthYear
     */
    public function setBirthYear(string $birthYear): void
    {
        $this->birthYear = $birthYear;
    }

    /**
     * @return string
     */
    public function getEyeColor(): string
    {
        return $this->eyeColor;
    }

    /**
     * @param string $eyeColor
     */
    public function setEyeColor(string $eyeColor): void
    {
        $this->eyeColor = $eyeColor;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getHairColor(): string
    {
        return $this->hairColor;
    }

    /**
     * @param string $hairColor
     */
    public function setHairColor(string $hairColor): void
    {
        $this->hairColor = $hairColor;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @param string $height
     */
    public function setHeight(string $height): void
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getMass(): string
    {
        return $this->mass;
    }

    /**
     * @param string $mass
     */
    public function setMass(string $mass): void
    {
        $this->mass = $mass;
    }

    /**
     * @return string
     */
    public function getSkinColor(): string
    {
        return $this->skinColor;
    }

    /**
     * @param string $skinColor
     */
    public function setSkinColor(string $skinColor): void
    {
        $this->skinColor = $skinColor;
    }

    /**
     * @return string
     */
    public function getHomeworld(): string
    {
        return $this->homeworld;
    }

    /**
     * @param string $homeworld
     */
    public function setHomeworld(string $homeworld): void
    {
        $this->homeworld = $homeworld;
    }

    /**
     * @return Film[]
     */
    public function getFilms(): array
    {
        return $this->films;
    }

    /**
     * @param Film[] $films
     */
    public function setFilms(array $films): void
    {
        $this->films = $films;
    }

    /**
     * @return Specie[]
     */
    public function getSpecies(): array
    {
        return $this->species;
    }

    /**
     * @param Specie[] $species
     */
    public function setSpecies(array $species): void
    {
        $this->species = $species;
    }

    /**
     * @return Starship[]
     */
    public function getStarships(): array
    {
        return $this->starships;
    }

    /**
     * @param Starship[] $starships
     */
    public function setStarships(array $starships): void
    {
        $this->starships = $starships;
    }

    /**
     * @return Vehicle[]
     */
    public function getVehicles(): array
    {
        return $this->vehicles;
    }

    /**
     * @param Vehicle[] $vehicles
     */
    public function setVehicles(array $vehicles): void
    {
        $this->vehicles = $vehicles;
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


}