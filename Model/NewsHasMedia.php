<?php
/**
 * Created by PhpStorm.
 * User: nevada
 * Date: 26.02.14
 * Time: 18:39
 */

namespace Ant\WebBundle\Model;


abstract class NewsHasMedia implements NewsHasMediaInterface
{
    protected $media;

    protected $news;

    protected $position;

    protected $updatedAt;

    protected $createdAt;

    protected $enabled;

    public function __construct()
    {
        $this->position = 0;
        $this->enabled  = false;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function setNews(NewsInterface $news = null)
    {
        $this->news = $news;
    }

    /**
     * {@inheritdoc}
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * {@inheritdoc}
     */
    public function setMedia(MediaInterface $media = null)
    {
        $this->media = $media;
    }

    /**
     * {@inheritdoc}
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * {@inheritdoc}
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->getNews().' | '.$this->getMedia();
    }
}
