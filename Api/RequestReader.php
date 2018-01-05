<?php

namespace Api;

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

class RequestReader implements RequestReaderInterface
{

    protected $argv;
    protected $operation;

    const ARGV = 'argv';

    const OP = 'op';

    public function __construct(array $request)
    {
        $this->argv = preg_split("~,~", $request[self::ARGV]);
        $this->operation = $request[self::OP];
    }

    public function getOperands()
    {
        return $this->argv;
    }

    public function getOperation()
    {
        return $this->operation;
    }
}