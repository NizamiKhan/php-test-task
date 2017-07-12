<?php


interface Figure
{
    //Возвращает плозадь фигур
    public function getAreaAll();

    //Возвращает площадь одной фигуры
    public function getOneArea(array $figure);
}