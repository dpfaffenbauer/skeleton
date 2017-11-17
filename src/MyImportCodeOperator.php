<?php

class MyImportCodeOperator extends \Pimcore\Model\DataObject\ImportColumnConfig\Operator\AbstractOperator
{

    /**
     * MyImportCodeOperator constructor.
     * @param $config
     */
    public function __construct($config)
    {
        parent::__construct($config);
        $this->params = $config->resolverSettings->params;
    }

    /**
     * @param $element
     * @param $target
     * @param $rowData
     * @param $rowIndex
     *
     * @return mixed
     */
    public function process($element, &$target, &$rowData, $colIndex, &$context = [])
    {
        $colData = $rowData[$colIndex];
        $target->setPublished($colData > 1510931949);
        if (!$target->getPublished()) {
            $target->setShortText("not available anymore", "en");
        }

    }
}
