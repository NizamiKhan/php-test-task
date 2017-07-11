<?php


interface Figure
{
    //Возвращает плозадь фигур
    public function getAreaAll();

    public function getOneArea(array $figure);
}