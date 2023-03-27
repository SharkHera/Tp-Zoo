<?php
class Enclos
{
    private int $id;
    private $typeEnclos;
    private $name;
    private $cleanliness;
    private $resident;




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
        if (isset($data['cleanliness'])) {
            $this->setcleanliness($data['cleanliness']);
        }
        if (isset($data['resident'])) {
            $this->setresident($data['resident']);
        }
    }


    public function afficherCaracteristiques()
    {
        echo "Nom : " . $this->name . "\n";
        echo "Propreté : " . $this->cleanliness . "\n";
        echo "Nombre d'animaux : " . $this->resident . "\n";
    }

    public function EmptyEnclosure()
    {
        if ($this->resident != 0) {
            $this->resident = 0;
        }
    }

    public function InfoAnimaux()
    {
    }

    public function cleanUp()
    {
        if ($this->resident = 0) {
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
    public function getcleanliness()
    {
        return $this->cleanliness;
    }

    /**
     * Set the value of degreDeProprete
     */
    public function setcleanliness($cleanliness): self
    {
        $this->cleanliness = $cleanliness;

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
        $this->id =  $id;

        return $this;
    }
}
