<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\ClassementRepository")
 */
class Classement
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
     * @ORM\Column(name="Classement", type="string", length=255)
     */
    private $Classement;


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
     * Set Classement
     *
     * @param string $classement
     * @return Classement
     */
    public function setClassement($classement)
    {
        $this->Classement = $classement;
    
        return $this;
    }

    /**
     * Get Classement
     *
     * @return string 
     */
    public function getClassement()
    {
        return $this->Classement;
    }
}