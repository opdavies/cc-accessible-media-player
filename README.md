#About the Plugin

This plugin was originally located at http://www.linkedin.com/groups/WordPress-Accessible-Media-Player-Plugin-4415968.S.132147460.

The plugin uses the correct WordPress way of including the various jQuery and Nomensa scripts and CSS (to play nice with other plugins). To get this to work correctly I've had to change a couple of the original Nomensa scripts a little. As well as this plugin it's sensible to use the 'Use Google Libraries' plugin to link up to the Google hosted version of jQuery and swfobject - should be a better chance of those files being cached in users' browsers. If you don't want to use the Google Libraries plugin then WordPress will use its own versions of the files.

#How to Use It

When the plugin is enabled, it will search for all instances of links to YouTube videos in the format: http://www.youtube.com/watch?v=xyKtRoGiNIM and replace them with the player. By default the player occupies 100% of the available width of the content container.

Alternatively you can use a shortcode to trigger the player. The shortcode is currently in the format:

    [videoplayer type="yt" vidid="xyKtRoGiNIM"]

Future enhancements will certainly be made in the area of configuring the player dimensions etc. You can add a ttf format caption file though using the above shortcode - just upload the ttf file as a txt file (WordPress blocks .xml files). To attach the captions file use the following format:

    [videoplayer type="yt" vidid="xyKtRoGiNIM" captions="full path to uploaded file"]
