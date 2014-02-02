<?php

namespace PHPocket\IO\PrintWriters;
use PHPocket\IO\PrintWriterInterface;

/**
 * Class StdOut
 * Standard output implementation of PrintWriterInterface
 *
 * @package PHPocket\IO\PrintWriters
 */
class StdOut implements PrintWriterInterface
{

    /**
     * Prints an object to standard output
     *
     * @param mixed $object
     * @return void
     */
    public function write($object)
    {
        echo $object;
    }

    /**
     * Prints an object  to standard output and puts
     * a newline character after it
     *
     * @param mixed|null $object
     * @return void
     */
    public function writeln($object = null)
    {
        if ($object !== null) {
            $this->write($object);
        }
        $this->write(PHP_EOL);
    }

}