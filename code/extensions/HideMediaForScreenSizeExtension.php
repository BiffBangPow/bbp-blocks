<?php

class HideMediaForScreenSizeExtension extends DataExtension {

    /**
     * @var array
     */
    private static $db = [
        'HideMediaForScreenSize' => Varchar::class
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields) {
        $description = 'Hides the media (image, video etc, NOT text) on certain screen sizes. Landscape tablets normally fall into the desktop category.';
        $dropdown = DropdownField::create(
            'HideMediaForScreenSize',
            'Hide Media For Screen Size',
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