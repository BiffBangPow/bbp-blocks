<?php

class FullWidthImageBlock extends Block
{
    /**
     * @var array
     */
    private static $has_one = [
        'Image' => Image::class
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main',
            [
                UploadField::create('Image')->setAllowedMaxFileNumber(1)
            ]
        );
        return $fields;
    }
}
