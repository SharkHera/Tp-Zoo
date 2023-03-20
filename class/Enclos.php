<?php
class Enclos
{
    private $id;
    private $typeEnclos;
    private $name;
    private $degreDeProprete;
    private $resident;


    // public function __construct($nom, $enclosType, $degreDeProprete, $resident)
    // {
    //     $this->nom = $nom;
    //     $this->degreDeProprete = $degreDeProprete;
    //     $this->resident = $resident;
    //     $this->enclosType = $enclosType;
    // }


    public function __construct(array $data)
    {
        if (isset($data['id'])) {
            $this->setId($data['id']);
        }
        if (isset($data['name'])) {
            $this->setNom($data['name']);
        }
        if (isset($data['typeEnclos'])) {
            $this->setenclosType($data['typeEnclos']);
        }
        if (isset($data['degreDeProprete'])) {
            $this->setdegreDeProprete($data['degreDeProprete']);
        }
        if (isset($data['resident'])) {
            $this->setresident($data['resident']);
        }
    }


    public function afficherCaracteristiques()
    {
        echo "Nom : " . $this->nom . "\n";
        echo "Propreté : " . $this->degreDeProprete . "\n";
        echo "Nombre d'animaux : " . $this->resident . "\n";
    }

    public function Manage()
    {
    }

    public function InfoAnimaux()
    {
    }

    public function cleanUp()
    {
        if ($resident = 0) {
            echo "L'enclos à été nettoyé.";
        } else {
            echo "Veuillez vider l'enclos avant de procéder au nettoyage.";
        }
    }

    /**
     * Get the value of anyType
     */
    public function getenclosType()
    {
        return $this->typeEnclos;
    }

    /**
     * Set the value of anyType
     */
    public function setenclosType($typeEnclos): self
    {
        $this->typeEnclos = $typeEnclos;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getNom()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setNom($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of degreDeProprete
     */
    public function getDegreDeProprete()
    {
        return $this->degreDeProprete;
    }

    /**
     * Set the value of degreDeProprete
     */
    public function setDegreDeProprete($degreDeProprete): self
    {
        $this->degreDeProprete = $degreDeProprete;

        return $this;
    }

    /**
     * Get the value of resident
     */
    public function getResident()
    {
        return $this->resident;
    }

    /**
     * Set the value of resident
     */
    public function setResident($resident): self
    {
        $this->resident = $resident;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}
