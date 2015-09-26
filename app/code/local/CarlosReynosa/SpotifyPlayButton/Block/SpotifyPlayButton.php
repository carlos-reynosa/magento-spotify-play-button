<?php

class CarlosReynosa_SpotifyPlayButton_Block_SpotifyPlayButton extends Mage_Core_Block_Template
{

    public function _construct()
    {
        $config = Mage::getModel('CarlosReynosa_SpotifyPlayButton/PlayButtonConfig');

        $this->setPlayButtonUrl($config->getUrl());
        $this->setWidth($config->getWidth());
        $this->setHeight($config->getHeight());
    }

}
