<?php

class StackClass
{

    private $stack = [];
    private $count = 0;
    private $maxSize = 1000;
    public $returnElement;


    public function push($element)
    {
        if ($this->count >= $this->maxSize) {
            echo 'Stack is full.' . PHP_EOL;
            return;
        }
        $this->stack[$this->count] = $element;
        $this->count++;
    }

    public function pop()
    {
        if ($this->count <= 0) {
            echo 'Stack is empty.' . PHP_EOL;
            return;
        }
        $returnElement = array_pop($this->stack);
        $this->count--;

        return $returnElement;
    }

    public function isEmpty()
    {
        return $this->count == 0;
    }
}