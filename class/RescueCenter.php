<?php
class RescueCenter{
private $nom;
private $employé;
private $maxCapacity;
private $enclosMap;



public function Display(){

}

public function Animauxpresent(){

}

public function Main(){
    do{

    }
    while(0);
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
 * Get the value of employé
 */
public function getEmployé()
{
return $this->employé;
}

/**
 * Set the value of employé
 */
public function setEmployé($employé): self
{
$this->employé = $employé;

return $this;
}

/**
 * Get the value of maxCapacity
 */
public function getMaxCapacity()
{
return $this->maxCapacity;
}

/**
 * Set the value of maxCapacity
 */
public function setMaxCapacity($maxCapacity): self
{
$this->maxCapacity = $maxCapacity;

return $this;
}

/**
 * Get the value of enclosMap
 */
public function getEnclosMap()
{
return $this->enclosMap;
}

/**
 * Set the value of enclosMap
 */
public function setEnclosMap($enclosMap): self
{
$this->enclosMap = $enclosMap;

return $this;
}
}
