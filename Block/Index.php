<?php
namespace AHT\Portfolio\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use AHT\Portfolio\Model\ResourceModel\Portfolio\Grid\CollectionFactory;

class Index extends Template implements BlockInterface
{
    private $portfolioRepository;

    public function __construct(
        Template\Context $context,
        \AHT\Portfolio\Model\PortfolioRepository $portfolioRepository
    ) {
        parent::__construct($context);
        $this->portfolioRepository = $portfolioRepository;
    }

    public function getPortfolio()
    {
        $collection = $this->portfolioRepository->getList();
        return $collection;
    }
}