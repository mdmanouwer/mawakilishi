RSS Remote Enclosure (encl_remote)
----------------------------------

RSS Remote Enclosure allows users to attach a remote resource link (i.e. a media file on a different server) to any node (subject to user permissions). The node author enters the URL and the Link Text into the designated text fields, and the link appears in an <enclosure> tag on the RSS feed (complete with correct size and MIME type). The link also appears in the link area below the body of the node.

The administrator, can restrict the use of RSS Remote Enclosure to certain roles and nodetypes. The administrator can also specify whether the link is displayed in the text of the RSS feed item.

This module is very handy if your users can't/don't want to create <a> tags themselves.
In most cases the module can replace third-party tools like Feedburner without the overhead.

This module is especially useful if you're running something like a podcast!


Working with Prepopulate module
-------------------------------

In case you use the encl_remote module with the prepopulate module (to preset the fields from a bookmarklet e.g.) this is the syntax:

 - URL:         edit[encl_remote][url]=...
 - Link Text:   edit[encl_remote][link-text]=...
 - Size:        edit[encl_remote][size]=...
 - MIME Type:   edit[encl_remote][mime-type]=...

E.g.

http://domain.tld/node/add/story?edit[title]=New+Link&edit[encl_remote][url]=link_url_here

