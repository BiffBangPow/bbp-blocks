<?php

class MediaPositionExtension extends DataExtension {

    /**
     * @var array
     */
    private static $db = [
        'MediaPosition' => Varchar::class
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields) {
        $description = 'The side that that the media (image, video etc, NOT text) should appear.';
        $fields->addFieldsToTab('Root.Style',
            [
                DropdownField::create(
                    'MediaPosition',
                    'Media Position',
                    [
                        'right' => 'Right',
                        'left' => 'Left'
                    ]
                )->setDescription($description),
            ]
        );
    }
}