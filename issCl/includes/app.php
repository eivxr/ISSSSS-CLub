<?php

require 'funciones.php';
require 'database.php';
require _DIR_ . '/../vendor/autoload.php';

//Conecta la base de datos
use Model\ActiveRecord;
ActiveRecord::setDB($db);