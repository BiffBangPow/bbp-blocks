<?php

class HideTitleExtension extends DataExtension {

    /**
     * @var array
     */
    private static $db = [
        'HideTitle' => Boolean::class
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldsToTab('Root.Style',
            [
                CheckboxField::create('HideTitle', 'Hide Title')
            ]
        );
    }
}