<?php
namespace AHT\Portfolio\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends abAction
{
    protected $_pageFactory;

    function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);    
        $this->_pageFactory = $pageFactory;
    }

    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Portfolio'));
        $resultPage->setActiveMenu('Portfolio::menu');
        return $resultPage;
    }
}