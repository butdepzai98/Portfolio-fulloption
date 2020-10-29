<?php
namespace AHT\Portfolio\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Show extends Action
{
    protected $_pageFactory;

	protected $_PortfolioFactory;

	protected $_PortfolioRepository;

    protected $_coreRegistry;
    
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        \AHT\Portfolio\Model\PortfolioFactory $PortfolioFactory,
        \AHT\Portfolio\Model\PortfolioRepository $PortfolioRepository,
        \Magento\Framework\Registry $coreRegistry
    )
    {
        $this->_pageFactory = $pageFactory;
		$this->_PortfolioFactory = $PortfolioFactory;
		$this->_PortfolioRepository = $PortfolioRepository;
		$this->_coreRegistry = $coreRegistry;

		return parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
		$this->_coreRegistry->register('id', $id);
		return $this->_pageFactory->create();
    }
}