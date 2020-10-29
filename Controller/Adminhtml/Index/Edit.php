<?php
namespace AHT\Portfolio\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Edit extends abAction
{
    protected $_pageFactory;

    function __construct(
        Context $context, 
        PageFactory $pageFactory)
    {
        parent::__construct($context);    
        $this->_pageFactory = $pageFactory;
    }

    /**
     * Edit CMS block
     *
     * @return \Magento\Framework\Controller\ResultInterface
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create(\AHT\Portfolio\Model\Portfolio::class);

        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This Portfolio no longer exists.'));
                /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }

        // $this->_coreRegistry->register('portfolio', $model);

        // 5. Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_pageFactory->create();
        $this->initPage($resultPage)->addBreadcrumb(
            $id ? __('Edit Portfolio') : __('New Portfolio'),
            $id ? __('Edit Portfolio') : __('New Portfolio')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Portfolio'));
        $resultPage->getConfig()->getTitle()->prepend($model->getId() ? $model->getTitle() : __('New Portfolio'));
        return $resultPage;
    }
}

