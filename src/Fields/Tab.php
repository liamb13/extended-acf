<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/wordplate/extended-acf
 */

declare(strict_types=1);

namespace WordPlate\Acf\Fields;

use InvalidArgumentException;
use WordPlate\Acf\Fields\Settings\ConditionalLogic;
use WordPlate\Acf\Fields\Settings\Endpoint;

class Tab extends Field
{
    use ConditionalLogic;
    use Endpoint;

    protected string|null $type = 'tab';

    /**
     * @param string $placement left or top
     * @throws \InvalidArgumentException
     */
    public function placement(string $placement): static
    {
        if (!in_array($placement, ['left', 'top'])) {
            throw new InvalidArgumentException("Invalid argument placement [$placement].");
        }

        $this->settings['placement'] = $placement;

        return $this;
    }
}
