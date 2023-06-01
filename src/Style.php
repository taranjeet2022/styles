<?php

declare(strict_types=1);

namespace Krypton\Styles;

class Style
{
    protected array $names;
    protected array $attrs;
    
    public function __construct(array $names, array $attrs)
    {
        $this->names = $names;
        $this->attrs = $attrs;
    }

    public function getNames(): array
    {
        return $this->names;
    }

    public function setNames(array $names): void
    {
        $this->names = $names;
    }

    public function addName($name): void
    {
        $this->names[] = $name;
    }

    public function getAttrs(): array
    {
        return $this->attrs;
    }

    public function setAttrs(array $attrs): void
    {
        $this->attrs = $attrs;
    }

    public function addAttr($key, $value): void
    {
        $this->attrs[$key] = $value;
    }

    private function getNameString(): string
    {
        $nameString = implode(',', $this->names);    

        return $nameString;
    }

    private function getAttrString(): string
    {
        $attrString = '';
        if (!empty($this->attrs)) {
            foreach ($this->attrs as $attrKey => $attrValue) {
                $attrString .= ' ' . $attrKey . '="' . $attrValue . '"';
            }
        }

        return $attrString;
    }

    public function render(bool $return = false): null|string
    {
        $style = '';

        if (!empty($this->names)) {
            $style .= $this->getNameString() . '{' . PHP_EOL;
            if (!empty($this->attrs)) {
                foreach ($this->attrs as $attrKey => $attrValue) {
                    $style .= $attrKey . ':' . $attrValue .  ';' . PHP_EOL;
                }
            }
            $style .= '}' . PHP_EOL;
        }

        if ($return) {
            return $style;
        } else {
            echo $style;
            return null;
        }
    }
}
