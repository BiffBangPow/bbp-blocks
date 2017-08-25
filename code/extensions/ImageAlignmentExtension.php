<?php

class ImageAlignmentExtension extends DataExtension {

    /**
     * @var array
     */
    private static $db = [
        'ImageAlignment' => Varchar::class
    ];

    /**
     * @var array
     */
    private static $defaults = [
        'ImageAlignment' => BBPBlockConfig::BACKGROUND_IMAGE_ALIGNMENT_DEFAULT
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields) {
        $description = 'Where the focus of the image is, used to ensure the subject maintains in focus during resizing.';
        $fields->addFieldsToTab('Root.Style',
            [
                DropdownField::create(
                    'ImageAlignment',
                    'Image Alignment',
                    BBPBlockConfig::BackgroundImageAlignment()
                )->setDescription($description),
            ]
        );
    }
}