<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Pradana\StarterPhp\Starter;

final class StarterTest extends TestCase
{
    /**
     * Starter class.
     *
     * @var Starter
     */
    private $starter;

    protected function setUp(): void
    {
        $this->starter = new Starter();
    }

    protected function tearDown(): void
    {
        $this->starter->flush();
    }

    /** @test */
    public function itCanPrintData()
    {
        $this->starter->setData('work');

        $this->assertEquals('work', $this->starter->print());
    }
}
