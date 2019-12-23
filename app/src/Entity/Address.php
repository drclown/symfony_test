<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Address
 * @ORM\Entity()
 * @ORM\Table(name="address")
 */
class Address
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO"))
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="addresses")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

}