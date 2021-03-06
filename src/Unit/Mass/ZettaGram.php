<?php
namespace PhpUnitConversion\Unit\Mass;

use PhpUnitConversion\System\Metric;

class ZettaGram extends Gram implements Metric
{
    const FACTOR = 1E21;

    const SYMBOL = 'Zg';
    const LABEL = 'zettagram';
}
