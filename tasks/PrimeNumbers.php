<?php

class PrimeNumbers
{
    private $numbers = array();
    private const MAX = 100;

    public function __construct($max = self::MAX)
    {
        $this->setNumbers($max);
    }

    //Заполняет массив простых чисел $numbers
    public function setNumbers(int $max)
    {
        for ($i = 2; $i <= $max; $i++) {
            if (PrimeNumbers::isPrimeNumber($i))
                $this->numbers[$i] = $i;
        }
    }

    //Возвращает массив $numbers
    public function getNumbers()
    {
        return $this->numbers;
    }

    //Сумма чисел в массиве
    public function summ()
    {
        return array_sum($this->numbers);
    }

    //Проверка на простое число
    private function isPrimeNumber($number)
    {
        for ($i = 2; $i <= sqrt($number); $i++)
            if (!($number % $i)) return false;
        return true;
    }
}