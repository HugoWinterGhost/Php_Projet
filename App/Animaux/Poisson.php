<?php

class Poisson {
    private $id;
    private $nom;
    private $couleur;
    private $age;
    private $race;
    private $description;
    private $booking;

    public function __construct(int $id, string $nom, string $couleur, int $age, string $race, string $description, bool $booking)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->age = $age;
        $this->race = $race;
        $this->description = $description;
        $this->booking = $booking;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     */
    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set the value of race
     */
    public function setRace($race): self
    {
        $this->race = $race;

        return $this;
    }


    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
      $this->description = $description;

      return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getBooking()
    {
      return $this->booking;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setBooking($booking)
    {
      $this->booking = $booking;

      return $this;
    }
}