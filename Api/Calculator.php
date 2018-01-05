<?php

namespace Api;

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

class Calculator
{
    protected $operationCollection;
    protected $requestReader;

    public function __construct(
        \ArrayObject $operationCollection,
        RequestReaderInterface $requestReader
    )
    {
        $this->operationCollection = $operationCollection;
        $this->requestReader = $requestReader;
    }

    public function calculate()
    {
        foreach ($this->operationCollection as $operation) {
            if($operation->isCalled($this->requestReader->getOperation())) {
                return $operation->execute();
            }
        }
    }
}