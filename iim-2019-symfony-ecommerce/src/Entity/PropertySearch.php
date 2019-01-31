<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Asserts;

class PropertySearch{
    
    /**
     * @var int & not null
     */
    private $maxPrice;
    
    /**
     * @var int & not null
     * @Assert\Range(min=10, max= 80)
     */
    private $minStock;
    
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }
    
    public function setMaxPrice(int $maxPrice): ProductSearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }
    
    public function getMinStock(): ?int
    {
        return $this->minStock;
    }
    
    public function setMinStock(int $minStock): ProductSearch
    {
        $this->minStock = $minStock;
        return $this;
    }
}