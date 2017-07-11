<?php

class Triangle extends Figures implements Figure

{
    private $triangles = array();

    //Заполняет массив треугольников $triangles()
    public function setTriangles()
    {
        $type = lcfirst(__CLASS__);
        $this->triangles = $this->getFiguresByType($type);
    }

    //Возвращает массив треугольников
    public function getTriangles(): array
    {
        if (empty($this->triangles))
            $this->setTriangles();
        return $this->triangles;
    }

    //Возвращает площади треугольников
    public function getAreaAll()
    {
        $areaAll = array();
        foreach ($this->getTriangles() as $triangle) {
            $area = Triangle::getOneArea($triangle);
            $triangle['area'] = $area;
            array_push($areaAll, $triangle);
        }
        return $areaAll;
    }

    //Вычисляет площадь треугольника
    public function getOneArea(array $triangle)
    {
        $a = $triangle['a'];
        $b = $triangle['b'];
        $c = $triangle['c'];
        $p = ($a + $b + $c)/2;
        $area = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        return $area;
    }
}
