<?php

class CallToActionBlock extends Block
{
    /**
     * @var array
     */
    private static $db = [
        'Text' => Text::class
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'CallToActionLink' => Link::class,
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
                UploadField::create('Image')->setAllowedMaxFileNumber(1),
                LinkField::create('CallToActionLinkID', 'Link to page or file')
            ]
        );
        return $fields;
    }
}
