<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Retrofit\Event;

use Exception;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ApiExceptionEvent
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ApiExceptionEvent extends Event
{
    /**
     * @var Exception
     */
    private $exception;

    /**
     * Constructor
     *
     * @param Exception $exception
     */
    public function __construct(Exception $exception)
    {
        $this->exception = $exception;
    }

    /**
     * @return Exception
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @param Exception $exception
     */
    public function setException(Exception $exception)
    {
        $this->exception = $exception;
    }
}
