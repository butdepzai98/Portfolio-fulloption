<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AHT\Portfolio\Api;

/**
 * CMS block CRUD interface.
 * @api
 * @since 100.0.2
 */
interface IndexRepositoryInterface
{
    /**
     * Save block.
     *
     * @param \AHT\Portfolio\Api\Data\IndexInterface $index
     * @return \AHT\Portfolio\Api\Data\IndexInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\IndexInterface $index);

    /**
     * Retrieve block.
     *
     * @param int $indexId
     * @return \AHT\Portfolio\Api\Data\IndexInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($indexId);

    /**
     * Retrieve blocks matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \AHT\Portfolio\Api\Data\IndexSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete block.
     *
     * @param \AHT\Portfolio\Api\Data\IndexInterface $index
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\IndexInterface $index);

    /**
     * Delete block by ID.
     *
     * @param int $indexId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($indexId);
}
