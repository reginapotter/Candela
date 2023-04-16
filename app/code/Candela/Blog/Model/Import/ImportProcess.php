<?php


namespace Candela\Blog\Model\Import;

use Magento\Framework\ObjectManagerInterface;

/**
 * Class ImportProcess
 */
class ImportProcess
{
    /**
     * @var array
     */
    private $imports;

    public function __construct($imports = [])
    {
        $this->imports = $imports;
    }

    public function processImport()
    {
        /** @var \Candela\Blog\Model\Import\AbstractImport $import */
        foreach ($this->imports as $import) {
            $import->processImport();
        }
    }
}
