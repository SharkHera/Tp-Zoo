<?php
class Tigre extends Animal
{

    private $TYPE = 'terrestre';

    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    public function Promenade()
    {
        echo "Le tigre se promène";
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
