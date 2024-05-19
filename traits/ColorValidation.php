<?php

trait ColorValidation
{
    private function validate(string $colorName, int $colorValue): void
    {
        if (0 > $colorValue || $colorValue > 255) {
            throw new Exception("Color '{$colorName}' is not a valid color.");
    }
    }
}