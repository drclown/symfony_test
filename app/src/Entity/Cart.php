<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Cart
 * @ORM\Entity()
 * @ORM\Table(name="cart")
 */
class Cart
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Product", mappedBy="carts")
     */
    private $products;


    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

}