<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\ArtisteRepository")
 */
class Artiste
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
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $Prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date")
     */
    private $DateNaissance;


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
     * @return Artiste
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
     * Set Prenom
     *
     * @param string $prenom
     * @return Artiste
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;
    
        return $this;
    }

    /**
     * Get Prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set DateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Artiste
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->DateNaissance = $dateNaissance;
    
        return $this;
    }

    /**
     * Get DateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }
}
