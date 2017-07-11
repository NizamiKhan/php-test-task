<?php


class Figures
{
    private $figures = array();

    function __construct()
    {
        Figures::setFigures();
    }

    //Возвращает массив всех фигур $figures()
    public function getFigures(): array
    {
        return $this->figures;
    }

    //Заполняет массив фигур
    private function setFigures()
    {
        $jsonPath = ROOT . '/figures.json';
        $jsonStr = file_get_contents($jsonPath);
        $jsonParse = json_decode($jsonStr, true);
        $this->figures = $jsonParse;
    }

    //Возвращает массив фигур по их типу
    public function getFiguresByType(string $type)
    {
        $figure_by_type = array();
        foreach ($this->getFigures() as $figure) {
            if ($figure['type'] == $type) {
                array_push($figure_by_type, $figure);
            }
        }
        return $figure_by_type;
    }

    //Сортировка по убыванию
    private static function sortByArea(array $figures)
    {
        $figures_area = array();
        foreach ($figures as $key => $arr) {
            $figures_area[$key] = $arr['area'];
        }
        array_multisort($figures_area, SORT_DESC, $figures);
        return $figures;
    }

    public static function run()
    {
        $circles = new Circle();
        $circles = $circles->getAreaAll();
        $rectangles = new Rectangle();
        $rectangles = $rectangles->getAreaAll();
        $triangles = new Triangle();
        $triangles = $triangles->getAreaAll();

        $figures = array_merge($circles, $rectangles, $triangles);
        echo 'До сортировки';
        var_dump($figures);
        echo 'После';
        $sort = self::sortByArea($figures);
        var_dump($sort);
    }
}