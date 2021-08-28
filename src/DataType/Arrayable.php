<?php
namespace Vendimia\Interface\DataType;

/**
 * Defines an object that can be converted to an array
 *
 * @author Oliver Etchebarne <yo@drmad.org>
 */
interface Arrayable
{
    /**
     * Returns this object as an array
     */
    public function asArray(): array;
}
