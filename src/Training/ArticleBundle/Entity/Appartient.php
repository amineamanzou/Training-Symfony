<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\AppartientRepository")
 */
class Appartient
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
     * @ORM\Column(name="Fonction", type="string", length=255)
     */
    private $Fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="Droit", type="string", length=255)
     */
    private $Droit;


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
     * Set Fonction
     *
     * @param string $fonction
     * @return Appartient
     */
    public function setFonction($fonction)
    {
        $this->Fonction = $fonction;
    
        return $this;
    }

    /**
     * Get Fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->Fonction;
    }

    /**
     * Set Droit
     *
     * @param string $droit
     * @return Appartient
     */
    public function setDroit($droit)
    {
        $this->Droit = $droit;
    
        return $this;
    }

    /**
     * Get Droit
     *
     * @return string 
     */
    public function getDroit()
    {
        return $this->Droit;
    }
}