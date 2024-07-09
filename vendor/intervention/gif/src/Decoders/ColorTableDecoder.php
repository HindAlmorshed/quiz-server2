<?php

declare(strict_types=1);

namespace Intervention\Gif\Decoders;

use Intervention\Gif\Blocks\Color;
use Intervention\Gif\Blocks\ColorTable;

class ColorTableDecoder extends AbstractDecoder
{
    /**
     * Decode given string to ColorTable
     *
     * @return ColorTable
     */
    public function decode(): ColorTable
    {
        $table = new ColorTable();
        for ($i = 0; $i < ($this->getLength() / 3); $i++) {
            $table->addColor(Color::decode($this->handle));
        }

        return $table;
    }
}
