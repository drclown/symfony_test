<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Command
 * @ORM\Entity()
 * @ORM\Table(name="command")
 */
class Command
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Cart")
     * @ORM\JoinColumn(name="cart_id", referencedColumnName="id")
     */
    private $cart;

}