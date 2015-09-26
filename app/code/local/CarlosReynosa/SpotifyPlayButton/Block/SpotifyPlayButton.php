<?php

class CarlosReynosa_SpotifyPlayButton_Block_SpotifyPlayButton extends Mage_Core_Block_Template
{

    private $config;

    public function _construct()
    {

        $this->config = $this->getFinalConfig();
        $this->setWidth($this->config->getWidth());
        $this->setHeight($this->config->getHeight());
    }

    private function getFinalConfig()
    {
        //Config with defaults
        $config = Mage::getModel('CarlosReynosa_SpotifyPlayButton/PlayButtonConfig');

        //Config values from other sources override defaults
        $uriId = $this->getUriId();

        if (isset($uriId) && $uriId != '') {
            $config->setUriId($this->getUriId());
        }

        $width = $this->getWidth();

        if (isset($width) && $width != '') {
            $config->setWidth($width);
        }

        $height = $this->getHeight();

        if (isset($height) && $height != '') {
            $config->setHeight($height);
        }

        return $config;
    }

    public function getWidgetUrl()
    {

        return $this->config->getUrl();
    }

}
