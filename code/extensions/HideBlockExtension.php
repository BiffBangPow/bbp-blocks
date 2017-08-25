<?php

class HideBlockExtension extends DataExtension {

    /**
     * @var array
     */
    private static $db = [
        'HideBlockForScreenSize' => Varchar::class
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields) {
        $description = 'Hides the entire block on certain screen sizes. Landscape tablets normally fall into the desktop category.';
        $dropdown = DropdownField::create(
            'HideBlockForScreenSize',
            'Hide Block For Screen Size',
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