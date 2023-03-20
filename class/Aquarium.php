<?php
class Aquarium extends Enclos
{

    private $salinité;

    public function __construct(array $data)
    {
        parent::__construct($data);
    }




    /**
     * Get the value of salinité
     */
    public function getSalinité()
    {
        return $this->salinité;
    }

    /**
     * Set the value of salinité
     */
    public function setSalinité($salinité): self
    {
        $this->salinité = $salinité;

        return $this;
    }
}
