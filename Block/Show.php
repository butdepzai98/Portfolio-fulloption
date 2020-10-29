<?php
namespace AHT\Portfolio\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Show extends Template
{
    private $PortfolioFactory;
	private $PortfolioRepository;
	private $_coreRegistry;

	public function __construct(
        \Magento\Framework\View\Element\Template\Context $context, 
        \AHT\Portfolio\Model\PortfolioFactory $PortfolioFactory, 
        \AHT\Portfolio\Model\PortfolioRepository $PortfolioRepository, 
		\Magento\Framework\Registry $coreRegistry)

	{
		parent::__construct($context);
		// $this->PortfolioFactory = $PortfolioFactory;
		$this->PortfolioRepository = $PortfolioRepository;
		$this->_coreRegistry = $coreRegistry;
	}

	public function getPortfolio()
	{
        $Portfolio_id = $this->_coreRegistry->registry('id');
        $Portfolio = $this->PortfolioRepository->getById($Portfolio_id);
        
		return $Portfolio;
	}
	public function execute()
	{
		return $this->_pageFactory->create();
	}
}