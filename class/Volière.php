<?php
class Volière extends Enclos
{

    private $hauteur;

    public function __construct(array $data)
    {
        parent::__construct($data);
    }


    // Affiche les caractéristiques de la volière
    public function afficherCaracteristiques()
    {
        parent::afficherCaracteristiques();
        echo "Hauteur : " . $this->hauteur . "\n";
    }


    // public function entretenir(): string
    // {
    //     $resultat = "";
    //     if ($this->getNombreAnimaux() === 0) {
    //         $resultat .= "L'enclos est vide, il n'y a rien à entretenir.";
    //     } else {
    //         $resultat .= "Entretien de la volière : vérification du sommet de la cage.";
    //         $this->setProprete("bonne");
    //         $resultat .= " Le degré de propreté de la volière a été mis à jour : " . $this->getProprete();
    //     }
    //     return $resultat;
    // }

    // public function ajouterAnimal(Animaux $animal): string
    // {
    //     $resultat = "";
    //     if (!$animal instanceof aigles) {
    //         $resultat .= "Une volière ne peut contenir que des animaux volants.";
    //     } else if ($this->getNombreAnimaux() === 6) {
    //         $resultat .= "La volière est pleine, il n'est pas possible d'ajouter un nouvel animal.";
    //     } else if ($this->getNombreAnimaux() === 0 || get_class($animal) === get_class($this->animaux[0])) {
    //         $this->animaux[] = $animal;
    //         $this->setNombreAnimaux($this->getNombreAnimaux() + 1);
    //         $resultat .= "L'animal a été ajouté à la volière.";
    //     } else {
    //         $resultat .= "La volière ne peut contenir que des animaux de la même espèce.";
    //     }
    //     return $resultat;
    // }

    // public function enleverAnimal(Animaux $animal): string
    // {
    //     $resultat = "";
    //     $index = array_search($animal, $this->animaux);
    //     if ($index !== false) {
    //         array_splice($this->animaux, $index, 1);
    //         $this->setNombreAnimaux($this->getNombreAnimaux() - 1);
    //         $resultat .= "L'animal a été enlevé de la volière.";
    //     } else {
    //         $resultat .= "L'animal n'est pas présent dans la volière.";
    //     }
    //     return $resultat;
    // }

    /**
     * Get the value of hauteur
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set the value of hauteur
     */
    public function setHauteur($hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }
}
