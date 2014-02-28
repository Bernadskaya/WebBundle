<?php
/**
 * Created by PhpStorm.
 * User: nevada
 * Date: 26.02.14
 * Time: 16:01
 */

namespace Ant\WebBundle\Model;

use Ant\WebBundle\Model\MediaInterface;

interface NewsHasMediaInterface
{
    /**
     * @param boolean $enabled
     *
     * @return void
     */
    public function setEnabled($enabled);

    /**
     * @return boolean
     */
    public function getEnabled();

    /**
     * @param NewsInterface $news
     *
     * @return void
     */
    public function setNews(NewsInterface $news = null);

    /**
     * @return void
     */
    public function getNews();

    /**
     * @param MediaInterface $media
     *
     * @return void
     */
    public function setMedia(MediaInterface $media = null);

    /**
     * @return MediaInterface
     */
    public function getMedia();

    /**
     * @param int $position
     *
     * @return int
     */
    public function setPosition($position);

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @param \DateTime|null $updatedAt
     *
     * @return void
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * @param \DateTime|null $createdAt
     *
     * @return void
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * @return void
     */
    public function getCreatedAt();

    /**
     * @return void
     */
    public function __toString();
}

