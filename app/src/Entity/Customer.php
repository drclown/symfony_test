<?php


namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Customer
 * @ORM\Entity()
 * @ORM\Table(name="customer")
 */
class Customer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Address", mappedBy="customer")
     */
    private $addresses;

    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }
}