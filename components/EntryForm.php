<?php namespace Mja\Forms\Components;

use Cms\Classes\ComponentBase;
use Mja\Forms\Controllers\Entries as EntryController;
use Mja\Forms\Models\Entry;

class EntryForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'EntryForm Component',
            'description' => 'Backend form used in the front-end'
        ];
    }

    public function onRun()
    {
        // Build a back-end form with the context of 'frontend'
        $formController = new EntryController();
        $formController->create('frontend');

        // Append the formController to the page
        $this->page['form'] = $formController;

        // Append the missing style file so that our front-end forms would look
        // just like back-end
        $this->addCss('/modules/backend/assets/css/controls.css', 'core');
    }

    public function onSave()
    {
        return ['error' => Entry::create(post('Entry'))];
    }

}
