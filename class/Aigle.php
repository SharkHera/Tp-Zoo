<?php


class Aigle extends Animal
{

    private $TYPE = 'volant';

    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    public function Voler()
    {
        echo "L'aigle vole";
    }

    /**
     * Get the value of TYPE
     */
    public function getTYPE()
    {
        return $this->TYPE;
    }

    /**
     * Set the value of TYPE
     */
    public function setTYPE($TYPE): self
    {
        $this->TYPE = $TYPE;

        return $this;
    }
}
