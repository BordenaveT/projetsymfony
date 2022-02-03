<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="string", length=250, nullable=false)
     */
    private $message;

    /**
     * @var bool
     *
     * @ORM\Column(name="Lu", type="boolean", nullable=false)
     */
    private $lu;


}
