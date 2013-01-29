<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crew
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\CrewRepository")
 */
class Crew
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $Nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=255)
     */
    private $Logo;


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
     * Set Nom
     *
     * @param string $nom
     * @return Crew
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;
    
        return $this;
    }

    /**
     * Get Nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set Logo
     *
     * @param string $logo
     * @return Crew
     */
    public function setLogo($logo)
    {
        $this->Logo = $logo;
    
        return $this;
    }

    /**
     * Get Logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->Logo;
    }
}
