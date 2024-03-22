<?php

class TextInput
{
    private array $text = [];

    /**
     * @return string
     */
    public function getValue(): string
    {
        return implode('', $this->text);
    }

    /**
     * @param mixed $text
     */
    public function add(mixed $text): void
    {
        $this->text[] = $text;
    }
}

class NumericInput extends TextInput
{
    public function add(mixed $text): void
    {
        if(filter_var($text, FILTER_VALIDATE_INT) !== false) {
            parent::add($text);
        }
    }

}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();