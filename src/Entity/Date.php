<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Date
 *
 * @ORM\Table(name="date", uniqueConstraints={@ORM\UniqueConstraint(name="date_id_uindex", columns={"id"})})
 * @ORM\Entity
 */
class Date
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="date_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var carbon|null
     *
     * @ORM\Column(name="date", type="carbon", nullable=true)
     */
    private $date;


}
