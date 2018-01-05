<?php declare(strict_types=1);
/*
 * This file is part of HtmlCompress.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WyriHaximus\HtmlCompress\Compressor;

abstract class Compressor implements CompressorInterface
{
    public function compress($source)
    {
        $result = $this->execute($source);

        if (is_string($result) && strlen($source) >= strlen($result)) {
            return $result;
        }

        return $source;
    }
}
