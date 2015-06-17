<?php namespace Mja\Forms;

use System\Classes\PluginBase;

/**
 * forms Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Forms',
            'description' => 'Backend form used in the frontend',
            'author'      => 'mja',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Mja\Forms\Components\EntryForm' => 'entryForm'
        ];
    }

}
