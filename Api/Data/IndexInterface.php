<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AHT\Portfolio\Api\Data;

/**
 * CMS block interface.
 * @api
 * @since 100.0.2
 */
interface IndexInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID      = 'id';
    const TITLE         = 'title';
    const IMAGES         = 'images';
    const DESCRIPTION   = 'description';
    const CREATED_AT = 'created_at';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();


    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();



    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();


    /**
     * Set ID
     *
     * @param int $id
     * @return BlockInterface
     */
    public function setId($id);


    /**
     * Set title
     *
     * @param string $title
     * @return BlockInterface
     */
    public function setTitle($title);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return BlockInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return BlockInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is active
     *
     * @param bool|int $isActive
     * @return BlockInterface
     */
    public function setIsActive($isActive);
}
