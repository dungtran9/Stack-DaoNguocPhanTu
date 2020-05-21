<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    /**
     * @return array
     */
    public function getStack()
    {
        return $this->stack;
    }

    public function push($data)
    {
        array_unshift($this->stack, $data);
    }

    public function pop()
    {
        array_shift($this->stack);
    }

    public function isEmpty()
    {
        if (empty($this->stack)) {
            echo "mang rong";
        } else {
            echo "mang co phan tu";
        }
    }
}