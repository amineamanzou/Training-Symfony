<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estimer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\EstimerRepository")
 */
class Estimer
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
     * @var integer
     *
     * @ORM\Column(name="Niveau", type="integer")
     */
    private $Niveau;


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
     * Set Niveau
     *
     * @param integer $niveau
     * @return Estimer
     */
    public function setNiveau($niveau)
    {
        $this->Niveau = $niveau;
    
        return $this;
    }

    /**
     * Get Niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->Niveau;
    }
}