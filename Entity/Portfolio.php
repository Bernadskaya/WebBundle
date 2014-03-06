<?php
/**
 * Created by PhpStorm.
 * User: nevada
 * Date: 08.01.14
 * Time: 19:18
 */

namespace Ant\WebBundle\Entity;


class Portfolio {
    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var string
     *
     */
    private $title;

    /**
     * @var string
     *
     */
    private $description;

    /**
     * @var string
     *
     */
    private $metaKey;

    /**
     * @var string
     *
     */
    private $metaDesc;


    /**
     * @var \DateTime
     *
     */
    private $created;


    /**
     * @var string
     */
    private $slug;

    /**
     * @var \Ant\MediaBundle\Entity\Gallery $gallery
     */
    private $gallery;
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
     * Set title
     *
     * @param string $title
     * @return Portfolio
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Portfolio
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
     * Set metakey
     *
     * @param string $metaKey
     * @return Portfolio
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;

        return $this;
    }

    /**
     * Get metakey
     *
     * @return string
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * Set metaDesc
     *
     * @param string $metaDesc
     * @return Portfolio
     */
    public function setMetaDesc($metaDesc)
    {
        $this->metaDesc = $metaDesc;

        return $this;
    }

    /**
     * Get metaDesc
     *
     * @return string
     */
    public function getMetaDesc()
    {
        return $this->metaDesc;
    }



    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }


    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Portfolio
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Portfolio
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Set gallery
     *
     * @param \Web\MediaBundle\Entity\Gallery $gallery
     *
     * @return Portfolio
     */
    public function setGallery($gallery)
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * Get gallery
     *
     * @return \Web\MediaBundle\Entity\Gallery
     *
     */
    public function getGallery()
    {
        return $this->gallery;
    }
}
