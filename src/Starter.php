<?php

declare(strict_types=1);

namespace Pradana\StarterPhp;

final class Starter
{
    /**
     * Print data.
     *
     * @var string|null
     */
    private $printer;

    /**
     * Setter data to print.
     *
     * @param string $data set data to print
     *
     * @return void
     */
    public function setData($data)
    {
        $this->printer = $data;
    }

    /**
     * Print data from data.
     *
     * @return string|null Data
     */
    public function print()
    {
        return $this->printer;
    }

    /**
     * Flush class.
     *
     * @return self
     */
    public function flush()
    {
        $this->printer = null;

        return $this;
    }
}
