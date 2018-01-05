<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Api\Operations;


use Api\RequestReaderInterface;

abstract class AbstractMathOperation
{

    const OPERATION = '';
    protected $operands;

    public function __construct(RequestReaderInterface $requestReader)
    {
        $this->operands = $requestReader->getOperands();
    }

    public function isCalled(string $operationName)
    {
        return static::OPERATION == $operationName;
    }

    public function getOperation()
    {
        return static::OPERATION;
    }

    public function getOperands()
    {
        return $this->operands;
    }

    public function execute()
    {
        $that = $this;
        return function() use ($that){

            $result = null;

            foreach ($that->getOperands() as $operand) {

                if (is_null($result)) {
                    $result = $operand;
                    continue;
                }

                $result = $that->executeOperation($result, $operand);
            }

            return $result;
        };
    }

    abstract public function executeOperation($result, $operand);
}