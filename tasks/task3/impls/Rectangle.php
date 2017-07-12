<?php

class Rectangle extends Figures implements Figure

{
    private $rectangles = array();

    //Заполняет массив прямоугольников $rectangles
    private function setRectangles()
    {
        $type = lcfirst(__CLASS__);
        $this->rectangles = $this->getFiguresByType($type);
    }

    //Возвращает массив $rectangles
    private function getRectangles(): array
    {
        if (empty($this->rectangles))
            $this->setRectangles();
        return $this->rectangles;
    }

    //Возвращает площади прямоугольников
    public function getAreaAll()
    {
        $areaAll = array();
        foreach ($this->getRectangles() as $rectangle) {
            $area = Rectangle::getOneArea($rectangle);
            $rectangle['area'] = $area;
            array_push($areaAll, $rectangle);
        }
        return $areaAll;
    }

    //Вычисляет площадь
    public function getOneArea(array $rectangle)
    {
        $a = $rectangle['a'];
        $b = $rectangle['b'];
        $area = $a * $b;
        return $area;
    }
}
