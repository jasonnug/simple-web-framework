# Simple Web Framework #

This is a simple website framework that implements a very basic routing format. The routing is handled by a modrewrite to redirect all requests to app/routing.php which handles serving the correct templates. This uses php, the Smarty templating engine, and boostrap3.

## Installation ##

Copy the entire directory into your working web directory of your choosing. There are a few settings you will need to change if you are working in either the root directory or a sub directory of your website. For example if you want the website located at your root, mywebsite.com versus a sub directory such as mywebsite.com/webframework. In the latter example your "working directory" is "/webframework" otherwise it's just "".

In the .htaccess file change the rewrite rule line:

    RewriteRule !\.(pdf|js|ico|gif|jpg|png|css|rar|zip|tar\.gz)$ /swf/app/routing.php [QSA,L] 

and replace "/swf" with your working directory. If you're working in the root just remove the "/swf" from that line.

In the app/environ_config.php file change line: 

    $app['_working_dir'] = "/swf";

to your working directory or change it to an empty string "" if your in the root.

#### Pages ####

The pages in this framework are handled by loading a json file that describes the attributes and urls (data/Pages.json).

Here's an example of a group of pages (included in this framework as a demo):

    {
        "404": {
            "url": "404",
            "title": "Error 404: Page Not Found",
            "icon": "",
            "active": false
        },
        "home": {
            "url": "",
            "title": "Home",
            "icon": "home",
            "active": true
        },
        "menu-one": {
            "url": "one",
            "title": "Menu One",
            "icon": "hand-pointer-o",
            "active": true,
            "pages": {
                "menu-one-sub-page-one": {
                    "url": "one/one",
                    "title": "Sub Page One",
                    "icon": "cloud",
                    "active": true
                },
                "menu-one-sub-page-two": {
                    "url": "one/two",
                    "title": "Sub Page Two",
                    "icon": "",
                    "active": true
                }
            }
        }
    }

Here we can see the "home" and "404" pages, which are recommended to always be included. Then we have the page "menu-one" which is a parent of a subset of "pages" which each have the same set of attributes. You can nest any number of pages within pages to form your heirarchy of menus. 

*The attributes for pages are*

    "name": {                           # this is the page identifier.
        "url": "url/path/to/file",      # the unique url request for this page, no directory required. This must be unique to   
                                            every page.
        "title": "Title",               # the visible name for the page presented in menus and headings
        "icon": "font-awesome",         # font awesome icon identifier (see http://fortawesome.github.io/Font-Awesome/icons/)
        "active": true                  # boolean for if the page is active and will be shown in the navigation.
        
    }

You can add additional attributes to this json objects but these are the basic ones used by the framework. They are loaded into the global *$app* object as $app['pages'] which is a multilevel hash representation of the json file. They can also be accessed in $app['page_list'] which is a flat hash indexed by their urls, for easy access to every page. For example you can get the title of the sub page "menu-one-sub-page-one" from $app['page_list']['one/one']['title']. 

The only other global variable in the framework is *$curPage* which is the current url request used to access the current page's attributes among other things. So to make the above example more dynamic we could get the *current page's* title by using $app['page_list'][$curPage]['title'] instead. Both of these variables are assigned and accessible within the template as well (e.g. {$app}, {$curPage}).

Krumo (http://krumo.sourceforge.net/) is included in the framework as a great way to easily view a complicated php object. You can use it to view the global *$app* object and it's other properties by calling the php function krumo($app).

There are are 3 global alerts that can be used in the framework. 

    $app['_error'] (red alert)
    $app['_warning'] (yellow alert)
    $app['_success'] (green alert)

Once you assign a string to these warnings they will be displayed to the user (alerts.tpl) the next time the page is loaded they will be unset. A good use of these is on a POST form submit, you could assign a string to $app['_error'] then refresh the page. The POST data will properly be eliminated and the error message will be displayed on the new page load. If you or the user refreshes again the error will be gone.

The favicon.ico and apple-touch-icon images should be changed with your logo. 