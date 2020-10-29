<?php
namespace AHT\Portfolio\Model;

use AHT\Portfolio\Api\Data;
use AHT\Portfolio\Api\PortfolioRepositoryInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use AHT\Portfolio\Model\ResourceModel\Portfolio as ResourcePortfolio;
use AHT\Portfolio\Model\ResourceModel\Portfolio\CollectionFactory as PortfolioCollectionFactory;

class PortfolioRepository implements PortfolioRepositoryInterface
{
    /**
     * @var ResourcePortfolio
     */
    protected $resource;

    /**
     * @var PortfolioFactory
     */
    protected $PortfolioFactory;

    /**
     * @var PortfolioCollectionFactory
     */
    protected $PortfolioCollectionFactory;

    /**
     * @var Data\PostSearchResultsInterfaceFactory
     */
    protected $searchResultsFactory;
    /**
     * @param ResourcePortfolio $resource
     * @param PortfolioFactory $PortfolioFactory
     * @param Data\PortfolioInterfaceFactory $dataPortfolioFactory
     * @param PortfolioCollectionFactory $PortfolioCollectionFactory
     * @param Data\PostSearchResultsInterfaceFactory $searchResultsFactory
     */
    private $collectionProcessor;

    public function __construct(
        ResourcePortfolio $resource,
        PortfolioFactory $PortfolioFactory,
        Data\PortfolioInterfaceFactory $dataPortfolioFactory,
        PortfolioCollectionFactory $PortfolioCollectionFactory
    ) {
        $this->resource = $resource;
        $this->PortfolioFactory = $PortfolioFactory;
        $this->PortfolioCollectionFactory = $PortfolioCollectionFactory;
        // $this->searchResultsFactory = $searchResultsFactory;
        // $this->collectionProcessor = $collectionProcessor ?: $this->getCollectionProcessor();
    }

    /**
     * Load Post data by given Post Identity
     *
     * @param string $PortfolioId
     * @return Post
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($PortfolioId)
    {
        $Portfolio = $this->PortfolioFactory->create();
        $Portfolio->load($PortfolioId);
        
        if (!$Portfolio->getId()) {
            throw new NoSuchEntityException(__('The CMS Post with the "%1" ID doesn\'t exist.', $PortfolioId));
        }
        return $Portfolio;
    }

    /**
     * Load Post data collection by given search criteria
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @param \Magento\Framework\Api\SearchCriteriaInterface $criteria
     * @return \Vinh\Curd\Api\Data\PostSearchResultsInterface
     */
    public function getList()
    {
        /** @var \Vinh\Curd\Model\ResourceModel\Post\Collection $collection */
        $collection = $this->PortfolioCollectionFactory->create();
        return $collection;
    }
}