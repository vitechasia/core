<?php

namespace Illuminate\Queue;

use Closure;
use Vdes\SerializableClosure\SerializableClosure;
use Opis\Closure\SerializableClosure as OpisSerializableClosure;

/**
 * @deprecated This class will be removed in Vdes 9.
 */
class SerializableClosureFactory
{
    /**
     * Creates a new serializable closure from the given closure.
     *
     * @param  \Closure  $closure
     * @return \Vdes\SerializableClosure\SerializableClosure
     */
    public static function make($closure)
    {
        if (\PHP_VERSION_ID < 70400) {
            return new OpisSerializableClosure($closure);
        }

        return new SerializableClosure($closure);
    }
}
