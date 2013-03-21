EssenceOne
==========

<<<<<<< HEAD
Single Model Php MVC Framework
=======
Single Model Php MVC Framework


EssenceOne Framework provides a single indexer model to handle views and controllers in a alphanumeric way. 
It does this by keeping all views and controllers in a organized list in the order in which they are called.
Similar to knowing that A static home page requires several parts. A header, head-banner, horizontal-Menus, 
left-menus, Contents, right-menus and footers. They being called or requested in the order they are needed 
by the indexer.
A protected page may contain scripts or controllers which consist of classes and functions. 
These are listed in the same way. For instance a members page would require a check-user script 
before the header to re-direct the user if he or she is not validated. Then you may require a users profile 
which would have to be placed before the left-menu page-part(view) in the indexer list accordingly. 
The single indexer does this extremely well.

The Indexer list
---
As shown the indexer here is requesting the page-parts in a list in order. 
Modules a separated by numeric order. c1 and v1 as ststic Public and 
c2, v2 as protected and c3, v3 as private(ADMIN) etc.
c2/sessions.php
c2/validate.php
v2/header2.php
v2/hz_menu2.php
v2/lft_menu2.php
v2/profile.php
c2/rht_menu2.php
v2/footer2.php

The Modules
---
Public(static)
c1
v1
Protected(members)
c2
v2
Private(admin)
c3
v3
Any additional Modules you wish to add.
c4,c5,c6---
v4,v5,v6---
That's as simple as it gets ! EssenceOne makes it easy !
>>>>>>> 92f5417c938daafd8c9829e48d20ff0854d6f149
