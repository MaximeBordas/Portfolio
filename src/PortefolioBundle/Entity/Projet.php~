<?php

namespace PortefolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="PortefolioBundle\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=5555)
     */
    private $description;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateProjetDebut", type="date")
     */
    private $dateProjetDebut;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateProjetFin", type="date")
     */
    private $dateProjetFin;


    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contexte", type="text", length=5555)
     */
    private $contexte;


    /**
     * @ORM\ManyToMany(targetEntity="PortefolioBundle\Entity\outil", cascade={"persist"})
     */
    private  $outil;

    /**
     * @ORM\ManyToMany(targetEntity="PortefolioBundle\Entity\Referent", cascade={"persist"})
     */
    private  $referent;

    /**
     * @ORM\ManyToOne(targetEntity="PortefolioBundle\Entity\Image")
     * @ORM\JoinColumn(nullable=false)
     */
    private $laImage;

    /**
     * @ORM\ManyToMany(targetEntity="PortefolioBundle\Entity\Document", cascade={"persist"})
     */
    private  $document;

    /**
     * @ORM\ManyToMany(targetEntity="PortefolioBundle\Entity\Tags",cascade={"persist"})
     */
    private  $tags;
    


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Projet
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contexte
     *
     * @param string $contexte
     *
     * @return Projet
     */
    public function setContexte($contexte)
    {
        $this->contexte = $contexte;

        return $this;
    }

    /**
     * Get contexte
     *
     * @return string
     */
    public function getContexte()
    {
        return $this->contexte;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->outil = new \Doctrine\Common\Collections\ArrayCollection();
        $this->referent = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add outil
     *
     * @param \PortefolioBundle\Entity\outil $outil
     *
     * @return Projet
     */
    public function addOutil(\PortefolioBundle\Entity\outil $outil)
    {
        $this->outil[] = $outil;

        return $this;
    }

    /**
     * Remove outil
     *
     * @param \PortefolioBundle\Entity\outil $outil
     */
    public function removeOutil(\PortefolioBundle\Entity\outil $outil)
    {
        $this->outil->removeElement($outil);
    }

    /**
     * Get outil
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOutil()
    {
        return $this->outil;
    }

    /**
     * Add referent
     *
     * @param \PortefolioBundle\Entity\Referent $referent
     *
     * @return Projet
     */
    public function addReferent(\PortefolioBundle\Entity\Referent $referent)
    {
        $this->referent[] = $referent;

        return $this;
    }

    /**
     * Remove referent
     *
     * @param \PortefolioBundle\Entity\Referent $referent
     */
    public function removeReferent(\PortefolioBundle\Entity\Referent $referent)
    {
        $this->referent->removeElement($referent);
    }

    /**
     * Get referent
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferent()
    {
        return $this->referent;
    }

    /**
     * Set laImage
     *
     * @param \PortefolioBundle\Entity\Image $laImage
     *
     * @return Projet
     */
    public function setLaImage(\PortefolioBundle\Entity\Image $laImage)
    {
        $this->laImage = $laImage;

        return $this;
    }

    /**
     * Get laImage
     *
     * @return \PortefolioBundle\Entity\Image
     */
    public function getLaImage()
    {
        return $this->laImage;
    }

    /**
     * Set leOutil
     *
     * @param \PortefolioBundle\Entity\outil $leOutil
     *
     * @return Projet
     */
    public function setLeOutil(\PortefolioBundle\Entity\outil $leOutil)
    {
        $this->leOutil = $leOutil;

        return $this;
    }

    /**
     * Get leOutil
     *
     * @return \PortefolioBundle\Entity\outil
     */
    public function getLeOutil()
    {
        return $this->leOutil;
    }

    /**
     * Set leDocument
     *
     * @param \PortefolioBundle\Entity\Document $leDocument
     *
     * @return Projet
     */
    public function setLeDocument(\PortefolioBundle\Entity\Document $leDocument)
    {
        $this->leDocument = $leDocument;

        return $this;
    }

    /**
     * Get leDocument
     *
     * @return \PortefolioBundle\Entity\Document
     */
    public function getLeDocument()
    {
        return $this->leDocument;
    }

    /**
     * Add document
     *
     * @param \PortefolioBundle\Entity\Document $document
     *
     * @return Projet
     */
    public function addDocument(\PortefolioBundle\Entity\Document $document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \PortefolioBundle\Entity\Document $document
     */
    public function removeDocument(\PortefolioBundle\Entity\Document $document)
    {
        $this->document->removeElement($document);
    }

    /**
     * Get document
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocument()
    {
        return $this->document;
    }
    
    /**
     * Set dateProjetFin
     *
     * @param \DateTime $dateProjetFin
     *
     * @return Projet
     */
    public function setDateProjetFin($dateProjetFin)
    {
        $this->dateProjetFin = $dateProjetFin;

        return $this;
    }

    /**
     * Get dateProjetFin
     *
     * @return \DateTime
     */
    public function getDateProjetFin()
    {
        return $this->dateProjetFin;
    }

    /**
     * Set dateProjetDebut
     *
     * @param \DateTime $dateProjetDebut
     *
     * @return Projet
     */
    public function setDateProjetDebut($dateProjetDebut)
    {
        $this->dateProjetDebut = $dateProjetDebut;

        return $this;
    }

    /**
     * Get dateProjetDebut
     *
     * @return \DateTime
     */
    public function getDateProjetDebut()
    {
        return $this->dateProjetDebut;
    }

    /**
     * Add tag
     *
     * @param \PortefolioBundle\Entity\Tags $tag
     *
     * @return Projet
     */
    public function addTag(\PortefolioBundle\Entity\Tags $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \PortefolioBundle\Entity\Tags $tag
     */
    public function removeTag(\PortefolioBundle\Entity\Tags $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }
}
