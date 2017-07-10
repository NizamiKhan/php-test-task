<?php

class PrimeNumbers
{
    private $numbers = array();

    public function __construct($max = 100)
    {
        $this->setNumbers($max);
    }

    //Заполняет массив простых чисел $numbers
    public function setNumbers(int $max)
    {
        for ($i = 2; $i <= $max; $i++) {
            if (self::isPrimeNumber($i))
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
        $summ = 0;
        foreach ($this->numbers as $number) {
            $summ += $number;
        }
        return $summ;
    }

    //Проверка на простое число
    private static function isPrimeNumber($number)
    {
        for ($i = 2; $i <= sqrt($number); $i++)
            if (!($number % $i)) return false;
        return true;
    }
}