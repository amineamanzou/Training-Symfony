<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CVArt
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\CVArtRepository")
 */
class CVArt
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
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $Titre;

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
     * Set Titre
     *
     * @param string $titre
     * @return CVArt
     */
    public function setTitre($titre)
    {
        $this->Titre = $titre;
    
        return $this;
    }

    /**
     * Get Titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * Set Logo
     *
     * @param string $logo
     * @return CVArt
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
