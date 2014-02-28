<?php
/**
 * Created by PhpStorm.
 * User: nevada
 * Date: 26.02.14
 * Time: 16:02
 */

namespace Ant\WebBundle\Model;


interface NewsInterface {

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getContext();

    /**
     * @param string $context
     *
     * @return string
     */
    public function setContext($context);

    /**
     * Get name
     *
     * @return string $title
     */
    public function getTitle();

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    public function getEnabled();

    /**
     * Set updated_at
     *
     * @param \Datetime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * Get updated_at
     *
     * @return \Datetime $updatedAt
     */
    public function getUpdatedAt();

    /**
     * Set created_at
     *
     * @param \Datetime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * Get created_at
     *
     * @return \Datetime $createdAt
     */
    public function getCreatedAt();

    /**
     * @param string $defaultFormat
     */
    public function setDefaultFormat($defaultFormat);

    /**
     * @return string
     */
    public function getDefaultFormat();

    /**
     * @param string
     */
    public function setNewsHasMedia($newsHasMedia);

    /**
     * @return string
     */
    public function getNewsHasMedia();

    /**
     * @param NewsHasMediaInterface $newsHasMedia
     */
    public function addNewsHasMedia(NewsHasMediaInterface $newsHasMedia);

    /**
     * @return string
     */
    public function __toString();
}
