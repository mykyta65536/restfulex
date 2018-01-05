<?php
/**
 * Created by PhpStorm.
 * User: probe_ent
 * Date: 28.11.2017
 * Time: 13:51
 */


spl_autoload_register(function ($className) {


    static $loadedFiles = array();


    if (isset($loadedFiles[$className])) {
        return;
    }

    $relativePath = $className . '.php';
    $absoluteDirPath = realpath(dirname(__FILE__));

    $fullFilePath = $absoluteDirPath . DIRECTORY_SEPARATOR . $relativePath;

    if (file_exists($fullFilePath)) {

        include_once $fullFilePath;
        $loadedFiles[$className] = $fullFilePath;
    }

});