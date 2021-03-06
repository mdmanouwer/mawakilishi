The Teaser Thumbnail module allows you to automatically generate thumbnails for your node teasers and 
RSS feeds from the pictures included in the body or the attachments. This module depend on ImageCache 2
and works with views.

INSTALL
-------

** NODE TEASERS AND RSS FEED ** 

1. Copy the teaserthumbnail folder into your modules folder.

2. Go to the modules page (admin/build/modules) and enable the Teaser Thumbmnail module
   (dependency on the ImageCache 2 module).

   !! WARNING !! : MAKE SURE YOU HAVE ENABLED A MODULE FOR IMAGE PROCESSING. This means either the
   "ImageAPI ImageMagick" or the "ImageAPI GD2" module. Without it, ImageCache won't be able to generate
   images.

3. Go to the settings page (admin/settings/teaserthumbnail) and select the default settings. You 
   need to have an ImageCache preset already created (admin/build/imagecache).

4. Navigate to the admin page of the content type for which you want to activate the Teaser Thumbnail
   feature (admin/content/node-type/YOUR_CONTENT_TYPE). You can here override the default settings.

5. Next time you create a node of that type, a Teaser Thumbnail will be associated to the node and may
   show in the teaser and RSS fee (depending on your settings).

** VIEWS ** 

1. Create a new node view (admin/build/views/add).

2. Add the "Node: Teaser Thumbnail" field to your view.

3. Define settings for the Teaser Thumbnail field: for D5 and D6 you can link the picture to its node and
   display either the original picture or the one processed through imagecache (thumbnail). For D6, you can
   also override the ImageCache preset used for building the Teaser Thumbnail.

AUTHOR
-------
Ronan Berder <hunvreus@gmail.com>
http://drupal.org/user/49057
http://teddy.fr