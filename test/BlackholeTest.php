<?php

use PHPocket\IO\PrintWriters\Blackhole;

class BlackholeTest extends \PHPUnit_Framework_TestCase
{

    public function testWrite()
    {
        $b = new Blackhole();
        $b->write(1);
        $b->write('foo');
        $b->write($b);
        $b->write(null);
        $b->write(false);
    }

    public function testWriteln()
    {
        $b = new Blackhole();
        $b->writeln(1);
        $b->writeln('foo');
        $b->writeln($b);
        $b->writeln(null);
        $b->writeln(false);
    }
}