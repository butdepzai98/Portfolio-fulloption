<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AHT\Portfolio\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for cms block search results.
 * @api
 * @since 100.0.2
 */
interface IndexSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get blocks list.
     *
     * @return \AHT\Portfolio\Api\Data\IndexInterface[]
     */
    public function getItems();

    /**
     * Set blocks list.
     *
     * @param \AHT\Portfolio\Api\Data\IndexInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
