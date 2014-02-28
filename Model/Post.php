<?php
/**
 * Created by PhpStorm.
 * User: nevada
 * Date: 26.02.14
 * Time: 16:12
 */

namespace Ant\WebBundle\Model;



abstract class Post implements NewsInterface
{
    /**
     * @var string $name
     */
    protected $context;

    /**
     * @var string $name
     */
    protected $title;

    /**
     * @var boolean $enabled
     */
    protected $enabled;

    /**
     * @var \Datetime $updatedAt
     */
    protected $updatedAt;

    /**
     * @var \Datetime $createdAt
     */
    protected $createdAt;

    protected $defaultFormat;

    protected $newsHasMedia;

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
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
    public function setDefaultFormat($defaultFormat)
    {
        $this->defaultFormat = $defaultFormat;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultFormat()
    {
        return $this->defaultFormat;
    }

    /**
     * {@inheritdoc}
     */
    public function setNewsHasMedia($newsHasMedia)
    {
        $this->newsHasMedia = $newsHasMedia;

    }

    /**
     * {@inheritdoc}
     */
    public function getNewsHasMedia()
    {
        return $this->newsHasMedia;
    }

    /**
     * {@inheritdoc}
     */
    public function addNewsHasMedia(NewsHasMediaInterface $newsHasMedia)
    {
        $newsHasMedia->setNews($this);

        $this->newsHasMedia[] = $newsHasMedia;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->getTitle() ?: '-';
    }

    /**
     * @param string $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }
}
