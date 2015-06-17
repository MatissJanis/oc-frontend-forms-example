<?php namespace Mja\Forms\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Entries Back-end Controller
 */
class Entries extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
    ];

    public $formConfig = 'config_form.yaml';
}
