<?php

class ValueObject
{
    use ColorValidation;

    public function __construct(private int $red, private int $green, private int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function equals(ValueObject $color): bool
    {
        return $this->getRed() === $color->getRed()
            && $this->getGreen() === $color->getGreen()
            && $this->getBlue() === $color->getBlue();
    }

    public function mix(ValueObject $otherColor): ValueObject
    {
        $mixedRed = (int)(($this->red + $otherColor->getRed()) / 2);
        $mixedGreen = (int)(($this->green + $otherColor->getGreen()) / 2);
        $mixedBlue = (int)(($this->blue + $otherColor->getBlue()) / 2);

        return new ValueObject($mixedRed, $mixedGreen, $mixedBlue);
    }

    static function random(): ValueObject
    {
        return new ValueObject(...static::rand());
    }

    static function rand(): array
    {
        $arr = [];
        for ($i = 0; $i < 4; ++$i) {
            $arr[] = rand(0, 255);
        }
        return $arr;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function setBlue(int $blue): void
    {
        $this->validate("blue", $blue);
        $this->blue = $blue;
    }

    public function setGreen(int $green): void
    {
        $this->validate("green", $green);
        $this->green = $green;
    }

    public function setRed(int $red): void
    {
        $this->validate("red", $red);
        $this->red = $red;
    }
}