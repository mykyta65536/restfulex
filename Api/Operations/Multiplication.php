<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Api\Operations;


class Multiplication extends AbstractMathOperation
{
    const OPERATION = '*';

    public function executeOperationi($result, $operand)
    {
        return $result * $operand;
    }

}