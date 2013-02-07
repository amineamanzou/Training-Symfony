<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediatheque
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\MediathequeRepository")
 */
class Mediatheque
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
     * Set Logo
     *
     * @param string $logo
     * @return Mediatheque
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
