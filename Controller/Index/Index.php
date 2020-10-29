<?php
namespace AHT\Portfolio\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    protected $pageFactory;
    protected $portfolioFactory;

    public function __construct(
        Context $context, 
        PageFactory $pageFactory,
        \AHT\Portfolio\Model\PortfolioFactory $portfolioFactory
        )
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        $this->portfolioFactory = $portfolioFactory;
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}