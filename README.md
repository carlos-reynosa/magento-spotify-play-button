#About
The Magento Spotify Play Button extension is a Magento 1 module that allows store administrators to easily add the official Spotify Play Buttons
to their store. 

#Features
Administrators can:

1. Add and configure the Spotify widget via short codes within Magento CMS pages

#Installation
This extension can be easily installed through [Composer](https://getcomposer.org/) or [Modman](git@github.com:colinmollenhour/modman.git).

## Composer Installation

Include the extension as a composer dependency within your `composer.json` `require` section and include it as a composer repository:

``` json
    "repositories": [
    {
        "type": "git",
        "url": "https://github.com/carlos-reynosa/magento-spotify-play-button.git"
    },
    "require":{
       "magento-hackathon/magento-composer-installer": "3.0.*",
       "carlosreynosa/magento-spotify-play-button": "dev-master"
    }
```

In order to install this extension with composer you must also require the community project [Magento Composer Installer](https://github.com/Cotya/magento-composer-installer). 

## Modman installation

Within the directory where you configured modman, type the following command to install the extension: `modman clone https://github.com/carlos-reynosa/magento-spotify-play-button.git"`

# Usage 

1. Magento CMS short codes

##1. Magento CMS short codes

The extension can be used to render the Spotify Play Button within Magento CMS pages by inserting the proper short code within the CMS page edit view. Insert the following short code within the content section of the 
CMS page edit view:

```
    {{block type="CarlosReynosa_SpotifyPlayButton/SpotifyPlayButton"  template="CarlosReynosa/SpotifyPlayButton/PlayButtonWidget.phtml"}}
```

The short code will render the widget with the extension default track and dimensions. In order to override the default values the extension allows you to specify custom width and height for dimensions and
track uri id that you want the widget to use. 

###Specify Custom shortcode Dimensions
In order to override the extension default values for the widget width and height dimensions, the extension allows you to pass in custom parameters. 

To set a custom width, pass in an integer value in ot the shortcode `width` parameter  like this:

```
    {{block type="CarlosReynosa_SpotifyPlayButton/SpotifyPlayButton" width="300"  template="CarlosReynosa/SpotifyPlayButton/PlayButtonWidget.phtml"}}
```

To set a custom height, pass in an integer value into the shortcode `height` parameter like this:

```
    {{block type="CarlosReynosa_SpotifyPlayButton/SpotifyPlayButton" width="300" height="380"  template="CarlosReynosa/SpotifyPlayButton/PlayButtonWidget.phtml"}}
```

###Specify Custom shortcode Track ID
In order to override the extension defualt value for the track Id, the extension allows you to pass in a custom parameter.

To set a custom track Id, pass in a valid spotify track URI Id into the `uri_id` parameter like this:

```
{{block type="CarlosReynosa_SpotifyPlayButton/SpotifyPlayButton" uri_id="3KYNB8H2YTuWGsJMyHS9Q9" template="CarlosReynosa/SpotifyPlayButton/PlayButtonWidget.phtml"}}
```

