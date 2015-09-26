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
        $this->setBaseUrl('https://embed.spotify.com/');
    }

    public function getUrl()
    {
        return $this->getBaseUrl() . '?uri=spotify:track:4th1RQAelzqgY7wL53UGQt';
    }
}