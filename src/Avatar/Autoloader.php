<?php

namespace src\Avatar;
class Autoloader // Cette Avatar n'a pas de propriétés et n'a pas vocation à créer plusieurs objets.
{
    static function autoload($classname)
    {
        include '../' . $classname . '.php';
    }

    static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }
}