<?php
class Employe
{
    private $name;
    private $age;
    private $sexe;
    private $db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }



    public function Examination()
    {
    }

    public function nettoyage()
    {
    }

    public function Nourrir()
    {
    }

    public function AjouterAnimaux()
    {
    }

    public function AjouterEnclos(Enclos $enclos)
    {
        $request = $this->db->prepare('INSERT INTO enclos (typeEnclos,name) VALUE(:typeEnclos,:name)');
        $request->execute([
            'name' => $enclos->getNom(),
            'typeEnclos' => $enclos->getenclosType()
        ]);
    }


    public function findAllEnclos()
    {
        $query = $this->db->query('SELECT * FROM enclos');
        $allEnclos = $query->fetchAll(PDO::FETCH_ASSOC);

        $allEncloslapute = [];

        foreach ($allEnclos as $data) {
            $enclos = new Enclos($data);
            array_push($allEncloslapute, $enclos);
        }

        return $allEncloslapute;
    }



    public function Reveil()
    {
    }

    public function ManageAnimaux()
    {
    }

    public function Directives()
    {
        //directives donner par l'employeur 

    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

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
     * Get the value of sexe
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     */
    public function setSexe($sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of db
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of db
     */
    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }
}
