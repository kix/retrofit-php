<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Retrofit\Generation\Manipulator;

/**
 * Class BodyManipulator
 *
 * @author Nate Brunette <n@tebru.net>
 */
class BodyManipulator
{
    /**
     * Convert booleans to string so that they're not passed as 0 and 1
     *
     * @param array $elements
     * @return array
     */
    public static function boolToString(array $elements)
    {
        foreach ($elements as $key => $element) {
            if (is_array($element)) {
                $elements[$key] = self::boolToString($element);
            }

            if (is_bool($element)) {
                $elements[$key] = self::varToString($element);
            }
        }

        return $elements;
    }

    /**
     * Convert a value to its string representation
     *
     * @param mixed $variable
     * @return string
     */
    public static function varToString($variable)
    {
        if (null === $variable) {
            return 'null';
        }

        if (is_bool($variable)) {
            return (true === $variable) ? 'true' : 'false';
        }

        if (is_array($variable)) {
            return '[]';
        }

        return (string)$variable;
    }
}
