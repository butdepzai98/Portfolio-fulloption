<?php
namespace AHT\Portfolio\Block\Adminhtml\Index\Edit;

use Magento\Backend\Block\Widget\Context;
// use AHT\Portfolio\Api\IndexRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class GenericButton
 */
class GenericButton
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        $this->context = $context;
    }

    /**
     * Return CMS block ID
     *
     * @return int|null
     */
    public function getIndexId()
    {
        // try {
        //     return $this->indexRepository->getById(
        //         $this->context->getRequest()->getParam('id')
        //     )->getId();
        // } catch (NoSuchEntityException $e) {
        // }
        // return null;

        return (int)$this->context->getRequest()->getParam('id');
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
