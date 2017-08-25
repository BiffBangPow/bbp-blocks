<?php

class HideTextForScreenSizeExtension extends DataExtension {

    /**
     * @var array
     */
    private static $db = [
        'HideTextForScreenSize' => Varchar::class
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields) {
        $description = 'Hides the Text on certain screen sizes. Landscape tablets normally fall into the desktop category.';
        $dropdown = DropdownField::create(
            'HideTextForScreenSize',
            'Hide Text For Screen Size',
            BBPBlockConfig::HidingClasses()
        );
        $dropdown->setDescription($description);
        $dropdown->setEmptyString('Show on all screen sizes');
        $fields->addFieldsToTab('Root.Responsive',
            [
                $dropdown
            ]
        );
    }
}