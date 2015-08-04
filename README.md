ARC: Ariadne Component Library 
========================= 

A flexible component library for PHP 5.4+ 
----------------------------------------- 

ARC is a set of components, build to be as simple as possible. Each component does just one thing and has a small and 
simple API to learn. ARC uses static factory methods to simplify the API while using Dependency Injection. ARC is not a
framework but can be used in combination with any or no framework.

The Ariadne Component Library is a spinoff from the Ariadne Web Application Platform and Content Management System 
[http://www.ariadne-cms.org/](http://www.ariadne-cms.org/). Many of the concepts used in ARC have their origin in Ariadne
and have been in use since 2000. 

The single common unique feature in all components is that they are designed to work in and with a tree structure. URL's
are based on the concept of paths in a filesystem. This same path concept and the underlying filesystem-like tree is
used in all ARC components. 

`arc/grants` stores access rights per path in a tree and allows or disallows access to entire subtrees. This matches 
directly with your website URL's. You can grant edit access to a 'mike' for the URL http://www.example.com/users/mike/.
Or disable read access for not-logged in users for http://www.example.com/members-only/.

`arc/events` uses the path in your URL to fire and listen for events. An event fired on /example/foo/baz/ can be listened
to on /example/. Events trickle 'up' and 'down' the path just like events in a webbrowser move up and down the DOM tree.

Installation
------------

Via [Composer](https://getcomposer.org/doc/00-intro.md):

    $ composer require arc/arc
    
This will download and install all arc components. But you don't need to do this, you can just download the components
you really need instead. Below is a list of components and what they do:

- [`arc/base`](https://github.com/Ariadne-CMS/arc-base/): Common datatypes and functionality shared by all ARC components.
Is installed automatically if needed.
- [`arc/cache`](https://github.com/Ariadne-CMS/arc-cache/): Cache functionality and a caching proxy class.
- [`arc/events`](https://github.com/Ariadne-CMS/arc-events/): Fire events and listen for them in a tree structure, 
modelled after the browsers DOM events.
- [`arc/config`](https://github.com/Ariadne-CMS/arc-config/): Configuration management, storing and retrieving 
configuration settings in a tree structure.
- [`arc/web`](https://github.com/Ariadne-CMS/arc-web/): URL component to ease manipulation of URL's (even non-PHP URL's) 
and a HTTP client. Includes an XSS preventer as a bonus.
- [`arc/xml`](https://github.com/Ariadne-CMS/arc-xml/): Parsing and writing XML made simple.
- [`arc/grants`](https://github.com/Ariadne-CMS/arc-grants/): Access control management in a tree structure, like a 
filesystem.

