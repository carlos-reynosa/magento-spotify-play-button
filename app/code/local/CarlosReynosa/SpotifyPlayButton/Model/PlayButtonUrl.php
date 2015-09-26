<?php
/**
 * Class used to generate a valid widget URL for the Spotify Play Button Widget.
 */
class CarlosReynosa_SpotifyPlayButton_Model_PlayButtonUrl extends Mage_Core_Model_Abstract
{
    /**
     * Set URL widget defaults.
     */
    protected function _construct()
    {
        //Defaults
        $this->setBaseUrl('https://embed.spotify.com/');
        $this->setUriId('7fgVBZ8hEoOeHHeSvFRmOg');
    }

    /**
     * Returns the final built URL for rendering the widget.
     * @return string
     */
    public function getUrl()
    {
        return $this->getBaseUrl() . '?uri=spotify:track:' . $this->getUriId();
    }
}