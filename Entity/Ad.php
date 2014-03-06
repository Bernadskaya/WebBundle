<?php

namespace Ant\WebBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * Ad
 */
class Ad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $adGroup;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var \Web\MediaBundle\Entity\Media $media
     */
    private $media;



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
     * Set text
     *
     * @param string $text
     *
     * @return Ad
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * Set url
     *
     * @param string $url
     *
     * @return Ad
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }



    /**
     * Set adGroup
     *
     * @param integer $adGroup
     *
     * @return Ad
     */
    public function setAdGroup($adGroup)
    {
        $this->adGroup = $adGroup;

        return $this;
    }

    /**
     * Get adGroupId
     *
     * @return integer
     */
    public function getAdGroup()
    {
        return $this->adGroup;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Ad
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set media
     *
     * @param \Web\MediaBundle\Entity\Media $media
     *
     * @return News
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Ant\MediaBundle\Entity\Media
     */
    public function getMedia()
    {
        return $this->media;
    }
}
