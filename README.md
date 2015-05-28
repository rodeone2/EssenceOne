EssenceOne
==========

<<<<<<< HEAD
Class Module Routed Php MVC Framework
=======
Class Module Routed Php MVC Framework


EssenceOne Framework provides a Class Module Routed Controller to handle Class Module Page Routers Views and Models in a alphanumeric way.
It does this by keeping all Views and Models in a stacked and staged page-part list in the order in which they are called within the Class Module Page Routers for each Module. The Class Module Router opens the Class Module Page Routers.
Knowing that A static home page requires several parts. A header, head-banner, horizontal-Menus,
left-menus, Contents, right-menus and footers. They being called or requested in the order they are needed
by the Class Module Page Routers.
A page may contain Views below Models which consist of classes and functions to echo the required data onto the View below them automaticaly by request.
For instance a members page would require a check-user script Model placed before the Header View for redirects of the user if he or she is not validated. Then you may require a users profile which would have to be placed before the left-menu page-part View in the Class Module Page Router list accordingly.
The Class Module Page Router does this extremely well. And Modules page-parts can be mixed with any other Modules page-parts.

A Module Class Page Router Stack.
---
As shown the Page Router here is requesting the page-parts in a list in order.
Modules a separated by numeric order. m1, v1 and c1 as static. m2, v2 and c2 as members. And m3, v3 and c3 as groups etc.
 A Members Pofile Class Module Page Router Stack.
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
Modules are separated alphanumerically.
Any additional Modules you wish to add.
c0---------Main Class Module Router index.php routes each Module below by request(index.php?mod=users&page=profile).
m1,v1,c1---static----pages----home,about,login,join etc.
m2,v2,c2---members---pages----profile,account,settings etc.
m3,v3,c3---groups----pages----create,add-image,add-user,view,comment,delete,post etc.
m4,v4,c4---friends---pages----add,accept,delete,block
add more.

That's as simple as it gets ! EssenceOne makes it easy and dynamic !
>>>>>>> 92f5417c938daafd8c9829e48d20ff0854d6f149
