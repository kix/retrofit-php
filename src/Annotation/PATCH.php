<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Retrofit\Annotation;

/**
 * Defines an HTTP PATCH request type to a REST path relative to base URL.
 *
 * @author Nate Brunette <n@tebru.net>
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
class PATCH extends HttpRequest
{
    /**
     * @return string
     */
    public function getType()
    {
        return 'patch';
    }
}
