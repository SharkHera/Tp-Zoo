<?php
class Requin extends Animal
{

    private $TYPE = 'aquatique';

    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    public function Nager()
    {
        echo "Le Requin nage";
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
