<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AHT\Portfolio\Ui\Component\Listing\Column;

use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;

/**
 * Class Thumbnail
 *
 * @api
 * @since 100.0.2
 */
class Thumbnail extends \Magento\Ui\Component\Listing\Columns\Column
{
    /**
     * Url path chinh sua Portfolio
     */
    const URL_PATH_EDIT = 'ad_portfolio/index/edit';

    /**
     * @var \AHT\Portfolio\Model\Portfolio
     */
    protected $portfolio;

    /**
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param \Magento\Framework\UrlInterface $urlBuilder
     * @param \AHT\Portfolio\Model\Portfolio $portfolio
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        \Magento\Framework\UrlInterface $urlBuilder,
        \AHT\Portfolio\Model\Portfolio $portfolio,
        array $components = [],
        array $data = []
    ) {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->urlBuilder = $urlBuilder;
        $this->portfolio = $portfolio;
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            $fieldName = $this->getData('name');
            foreach ($dataSource['data']['items'] as & $item) {
                $portfolio = new \Magento\Framework\DataObject($item);
                $item[$fieldName . '_src'] = $this->portfolio->getImageUrl($portfolio['image']);
                $item[$fieldName . '_orig_src'] = $this->portfolio->getImageUrl($portfolio['image']);
                $item[$fieldName . '_link'] = $this->urlBuilder->getUrl(
                    self::URL_PATH_EDIT,
                    ['id' => $portfolio['id']]
                );
                $item[$fieldName . '_alt'] = $portfolio['name'];
            }
        }

        return $dataSource;
    }

    /**
     * Get Alt
     *
     * @param array $row
     *
     * @return null|string
     */
    protected function getAlt($row)
    {
        // $altField = $this->getData('config/altField') ?: self::ALT_FIELD;
        // return $row[$altField] ?? null;
    }
}
