<?php

/**
 * Copyright 2015 DataStax, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Cassandra;

/**
 * Common interface implemented by all numeric types, providing basic
 * arithmetic functions.
 */
interface Numeric
{
    /**
     * @param  Numeric $addend a number to add to this one
     * @retval Numeric sum
     */
    function add(Numeric $addend);

    /**
     * @param  Numeric $subtrahend a number to subtract from this one
     * @retval Numeric             difference
     */
    function sub(Numeric $subtrahend);

    /**
     * @param  Numeric $multiplier a number to multiply this one by
     * @retval Numeric             product
     */
    function mul(Numeric $multiplier);

    /**
     * @param  Numeric $divisor a number to divide this one by
     * @retval Numeric          quotient
     */
    function div(Numeric $divisor);

    /**
     * @param  Numeric $divisor a number to divide this one by
     * @retval Numeric          remainder
     */
    function mod(Numeric $divisor);

    /**
     * @retval Numeric absolute value
     */
    function abs();

    /**
     * @retval Numeric negative value
     */
    function neg();

    /**
     * @retval Numeric square root
     */
    function sqrt();

    /**
     * @retval int this number as int
     */
    function toInt();

    /**
     * @retval float this number as float
     */
    function toDouble();
}
