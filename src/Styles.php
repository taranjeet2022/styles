<?php

declare(strict_types=1);

namespace Krypton\Styles;

use Krypton\Styles\Style;

class Styles
{
    protected array $styles;
    
    public function __construct(array $styles)
    {
        $this->prepareStylesFromArray($styles);
    }

    public function getStyles(): array
    {
        return $this->styles;
    }

    public function setStyles(array $styles): void
    {
        $this->styles = $styles;
    }

    public function addStyle(Style $style): void
    {
        $this->styles[] = $style;
    }

    public function prepareStylesFromArray(array $styles): void
    {
        if (!empty($styles)) {
            foreach ($styles as $style) {
                $this->styles[] = new Style($style['names'], $style['attrs']);
            }
        }
    }

    public function render(bool $return = false): null|string
    {
        $styles = '';

        if (!empty($this->styles)) {
            foreach ($this->styles as $style) {
                $styles .= $style->render(true);
            }
        }

        if ($return) {
            return $styles;
        } else {
            echo $styles;
            return null;
        }
    }
}
