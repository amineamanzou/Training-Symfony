<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnTantQue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\EnTantQueRepository")
 */
class EnTantQue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut", type="string", length=255)
     */
    private $Statut;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Statut
     *
     * @param string $statut
     * @return EnTantQue
     */
    public function setStatut($statut)
    {
        $this->Statut = $statut;
    
        return $this;
    }

    /**
     * Get Statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->Statut;
    }
}