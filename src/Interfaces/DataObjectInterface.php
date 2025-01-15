<?php

declare(strict_types=1);

namespace Maginium\Foundation\Interfaces;

use Illuminate\Contracts\Support\Arrayable;

/**
 * Universal data container with array access implementation.
 */
interface DataObjectInterface extends Arrayable
{
    /**
     * Add data to the object.
     *
     * Retains previous data in the object.
     *
     * @return $this
     */
    public function addData(array $arr);

    /**
     * Overwrite data in the object.
     *
     * The $key parameter can be string or array.
     * If $key is string, the attribute value will be overwritten by $value
     *
     * If $key is an array, it will overwrite all the data in the object.
     *
     * @param  string|array  $key
     * @param  mixed  $value
     *
     * @return $this
     */
    public function setData($key, $value = null);

    /**
     * Unset data from the object.
     *
     * @param  null|string|array  $key
     *
     * @return $this
     */
    public function unsetData($key = null);

    /**
     * Object data getter.
     *
     * If $key is not defined will return all the data as an array.
     * Otherwise it will return value of the element specified by $key.
     * It is possible to use keys like a/b/c for access nested array data
     *
     * If $index is specified it will assume that attribute data is an array
     * and retrieve corresponding member. If data is the string - it will be Php::explode
     * by new line character and converted to array.
     *
     * @param  string  $key
     * @param  string|int  $index
     *
     * @return mixed
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function getData($key = '', $index = null);
}
