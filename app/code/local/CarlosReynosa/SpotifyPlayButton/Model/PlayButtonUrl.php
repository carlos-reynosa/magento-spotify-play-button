<?php

/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 8/1/15
 * Time: 3:13 PM
 */
class CarlosReynosa_SpotifyPlayButton_Model_PlayButtonUrl extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        //Defaults
        $this->setBaseUrl('https://embed.spotify.com/');
        $this->setTrack('7fgVBZ8hEoOeHHeSvFRmOg');
    }

    public function getUrl()
    {
        return $this->getBaseUrl() . '?uri=spotify:track:' . $this->getTrack();
    }
}