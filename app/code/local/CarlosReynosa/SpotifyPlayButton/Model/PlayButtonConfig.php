<?php

/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 8/1/15
 * Time: 2:30 PM
 */
class CarlosReynosa_SpotifyPlayButton_Model_PlayButtonConfig extends Mage_Core_Model_Abstract
{

    protected function _construct()
    {
        $urlBuilder = Mage::getModel('CarlosReynosa_SpotifyPlayButton/PlayButtonUrl');
        $url = $urlBuilder->getUrl();
        $this->setWidth(300);
        $this->setHeight(80);
        $this->setUrl($url);


        $this->setUri('spotify:album:57bABnvvPfNhBQRI70dqlU');
    }
}