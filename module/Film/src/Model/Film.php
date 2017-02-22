<?php

namespace Film\Model;

use Doctrine\ORM\Mapping as ORM;
use Director\Model\Director;
use Image\Model\Image;
use Actor\Model\Actor;
use Genre\Model\Genre;

/**
 * Film
 *
 * @ORM\Table(name="film", indexes={@ORM\Index(name="fk_film_directo", columns={"director_id"}), @ORM\Index(name="fk_film_img", columns={"img_id"}), @ORM\Index(name="fk_film_genre", columns={"genre_id"})})
 * @ORM\Entity(repositoryClass="Film\Repository\FilmRepository")
 */
class Film
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_create", type="datetime", nullable=true)
     */
    private $dtCreate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_modification", type="datetime", nullable=true)
     */
    private $dtModification;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="string", length=2000, nullable=false)
     */
    private $synopsis;

    /**
     * @var Director
     *
     * @ORM\ManyToOne(targetEntity="Model\Director")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="director_id", referencedColumnName="id")
     * })
     */
    private $director;

    /**
     * @var Genre
     *
     * @ORM\ManyToOne(targetEntity="Model\Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="genre_id", referencedColumnName="id")
     * })
     */
    private $genre;

    /**
     * @var Image
     *
     * @ORM\ManyToOne(targetEntity="Model\Image")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="img_id", referencedColumnName="id")
     * })
     */
    private $img;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtCreate()
    {
        return $this->dtCreate;
    }

    /**
     * @param \DateTime $dtCreate
     *
     * @return $this
     */
    public function setDtCreate(\DateTime $dtCreate)
    {
        $this->dtCreate = $dtCreate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtModification()
    {
        return $this->dtModification;
    }

    /**
     * @param \DateTime $dtModification
     *
     * @return $this
     */
    public function setDtModification(\DateTime $dtModification)
    {
        $this->dtModification = $dtModification;

        return $this;
    }

    /**
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * @param string $synopsis
     *
     * @return $this
     */
    public function setSynopsis(string $synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * @return Director
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param Director $director
     *
     * @return $this
     */
    public function setDirector(\Model\Director $director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * @return Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param Genre $genre
     *
     * @return $this
     */
    public function setGenre(\Model\Genre $genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * @return Image
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param Image $img
     *
     * @return $this
     */
    public function setImg(\Model\Image $img)
    {
        $this->img = $img;

        return $this;
    }


    //Ajout actor - Many to Many


}

