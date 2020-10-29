<?php
namespace AHT\Portfolio\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface PortfolioRepositoryInterface
{

    /**
     * Retrieve Post.
     *
     * @param int $PortfolioId
     */
    public function getById($PortfolioId);

    /**
     * Retrieve Posts matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Vinh\Curd\Api\Data\PostSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList();
}