<?php

interface Formatter
{
    public function format($string);
}

interface Delivery
{
    public function deliver($formattedString);
}

class RawFormatter implements Formatter
{
    public function format($string)
    {
        return $string;
    }
}

class WithDateFormatter implements Formatter
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string;
    }
}

class WithDateAndDetailsFormatter implements Formatter
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}

class EmailDelivery implements Delivery
{
    public function deliver($formattedString)
    {
        echo "Вывод формата ({$formattedString}) по имейл";
    }
}

class SmsDelivery implements Delivery
{
    public function deliver($formattedString)
    {
        echo "Вывод формата ({$formattedString}) в смс";
    }
}

class ConsoleDelivery implements Delivery
{
    public function deliver($formattedString)
    {
        echo "Вывод формата ({$formattedString}) в консоль";
    }
}

class Logger
{
    private $formatter;
    private $delivery;

    public function __construct(Formatter $formatter, Delivery $delivery)
    {
        $this->formatter = $formatter;
        $this->delivery  = $delivery;
    }

    public function log($string)
    {
        $formattedString = $this->formatter->format($string);
        $this->delivery->deliver($formattedString);
    }
}

$formatter = new RawFormatter();
$delivery = new SmsDelivery();
$logger = new Logger($formatter, $delivery);
$logger->log('Emergency error! Please fix me!');
