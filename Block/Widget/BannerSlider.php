<?php
namespace AHT\Portfolio\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Widget\Block\BlockInterface;
use AHT\Portfolio\Block\Index;

class BannerSlider extends Template implements BlockInterface
{
    protected $_template = "widget/test.phtml";
    protected $_collection;

    /**
     * $data[]
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        Index $collection
    ) {
        parent::__construct($context, $data);
        $this->_collection = $collection;
    }

    /**
     * construct function
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate($this->_template);
    }

    public function getTitle()
    {
        $desc = $this->getData('title');
        return $desc;
    }

    public function getNumSlide()
    {
        return $this->getData('numSlide');
    }

    function getCollection()
    {
        $data = $this->_collection->getPortfolio();
        return $data;
    }
}