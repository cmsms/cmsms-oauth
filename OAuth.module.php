<?php

/**
 * OAuth Module
 * This module allows you to use the PHPoAuthLib library (https://github.com/Lusitanian/PHPoAuthLib)
 */

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

class OAuth extends CMSModule
{
    public function GetName()
    {
        return 'OAuth';
    }

    public function GetVersion()
    {
        return '0.0.1';
    }

    public function MinimumCMSVersion()
    {
        return '1.11';
    }

    public function GetAuthor()
    {
        return 'Jean-Christophe Cuvelier';
    }

    public function GetAuthorEmail()
    {
        return 'jcc@atomseeds.com';
    }
}