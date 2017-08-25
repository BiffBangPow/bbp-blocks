<?php

class BBPBlockConfig
{
    const BACKGROUND_IMAGE_ALIGNMENT_DEFAULT = 'center center';

    /**
     * @return array
     */
    public static function HidingClasses()
    {
        return [
            'hidden-sm-down' => 'Mobile',
            'hidden-md-down' => 'Tablet and Mobile',
            'hidden-md-up' => 'Tablet and Desktop',
            'hidden-lg-up' => 'Desktop',
        ];
    }
    /**
     * @return array
     */
    public static function BackgroundImageAlignment()
    {
        return [
            'left top' => 'Top Left',
            'center top' => 'Top Center',
            'right top' => 'Top Right',
            'left center' => 'Left Center',
            'right center' => 'Right Center',
            'center center' => 'Center Center',
            'left bottom' => 'Bottom Left',
            'center bottom' => 'Bottom Center',
            'right bottom' => 'Bottom Right',
        ];
    }
}