<?php
/**
 * Class used to store and build widget configuration for final rendering.
 */
class CarlosReynosa_SpotifyPlayButton_Model_PlayButtonConfig extends Mage_Core_Model_Abstract
{

    private $widgetUrl;

    /**
     * Set defaults for constructing widget parameters that allow proper rendering.
     */
    protected function _construct()
    {
        $this->widgetUrl = Mage::getModel('CarlosReynosa_SpotifyPlayButton/PlayButtonUrl');
        $this->setWidth(300);
        $this->setHeight(380);
    }

    /**
     * Sets the URI used to build the final widget URL.
     * @param $id
     */
    public function setUriId($id)
    {
        $this->widgetUrl->setUriId($id);
    }

    /**
     * Returns the final widget URL used to render the widget.
     * @return String
     */
    public function getUrl()
    {
        return $this->widgetUrl->getUrl();
    }

}