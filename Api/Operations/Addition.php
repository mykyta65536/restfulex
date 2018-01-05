<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Api\Operations;


class Addition extends AbstractMathOperation
{
    const OPERATION = '+';

    public function executeOperation($result, $operand)
    {
        return $result + $operand;
    }
}