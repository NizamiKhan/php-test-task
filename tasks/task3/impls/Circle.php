<?php


class Circle extends Figures implements Figure

{
    private $circles = array();

    //Заполняет массив кругов $circles
    private function setCircles()
    {
        $type = lcfirst(__CLASS__);
        $this->circles = $this->getFiguresByType($type);
    }

    //Возвращает массив $circles
    private function getCircles(): array
    {
        if (empty($this->circles))
            $this->setCircles();
        return $this->circles;
    }

    //Возвращает площадь для всех кругов
    public function getAreaAll()
    {
        $areaAll = array();
        foreach ($this->getCircles() as $circle) {
            $area = Circle::getOneArea($circle);
            $circle['area'] = $area;
            array_push($areaAll, $circle);
        }
        return $areaAll;
    }

    //Возвращает площадь для одного круга
    public function getOneArea(array $circle)
    {
        $radius = $circle['radius'];
        $areaFormula = M_PI * pow($radius, 2);
        $area = round($areaFormula, 2);
        return $area;
    }
}
