<?php
namespace persistencia\generico;

interface IGenericoVO {
    function getAtributos();
    function convertir($info);
}
