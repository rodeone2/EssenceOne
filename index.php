<?php
include('a1/config.php');

/** //////////////////////////////////////////////////////////////////////

    GNU Public License Version 3.0

    Php MVC Framework With Single Model Indexer.
    Copyright (C) 2012  about2mount@gmail.com
  

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

    EssenceOne Single Model MVC Php Framework.
    Copyright (C) 2012  Robin Deatherage/ about2mount@gmail.com

    This program comes with ABSOLUTELY NO WARRANTY; for details see"A."
    This is free software, and you are welcome to redistribute it
    under certain conditions; type See "B." for details.

    A.AS LONG AS MY NAME STAYS WITHIN THIS README FILE.
    B.AS LONG AS MY NAME AND EMAIL REMAIN IN THE REDISTRIBUTED COPY-
    -INSIDE THE INDEX.PHP PAGE.
 **///////////////////////////////////////////////////////////////////////
////THIS IS THE HEART OF ESSENC-EONE.////
////THE CONFIG FILE STORES THE ACTUAL PATHS. ANY CHANGES SHOULD BE DONE THERE.////
////IF YOU INTEND ON USING ANOTHER TEMPLATE LIKE TWITTER-BOOTSTRAP YOU WILL---/////// 
////---HAVE TO DESIGN YOUR PAGES AND BREAK THEM DOWN BY SECTION(PAGE-PARTS) AND ASIGN THEM HERE AND IN THE CONFIG FILE////
////THIS FRAMEWORK USES A SINGLE INDEXER, YOU CAN COPY AND ADD MORE AND ADD MORE CONFIG FILES IN THE M1 FOLDERS. ////
////ANY PHP RE DIRECT SCRIPTS SUCH AS "LOGIN PROCESS RE DIRECT" WILL HAVE TO BE PLACED ABOVE THE HEADER PATH $VARIABLES BELOW////
////THIS FRAMEWORK ALLOWS CONTROLLER INCLUDED PATH VARIABLES TO BE PLACED ABOVE---////
////---EACH PAGE PART VIEW $VARIABLE WHERE THEY ARE NEEDED, THIS WILL ELLIMINATE---//// 
////---HAVING TO ADD INCLUDES FUNCTIONS INTO SCRIPTS ALL PHP INCLUDES FUNCTIONS ARE DONE AUTOMATICALLY.////
////THIS FRAMEWORK WILL WORK WITH REQUIRE-ONCE CONVICTIONS USING PHP, THIS MAY DEPEND ON PREFERENCE.////
////CONTROLLERS(CLASSES AND FUNCTIONS)ARE EASILY ECHOED BY THE VIEWS USING PHP-SHORT-TAGS.////
////YOU CAN ALSO BUILD BY HAVING THE CONTROLLERS ECHO THE VIEWS BY LISTING THEM HERE INSTEAD OF VIEWS OR BOTH.//// 

?>
<?php
if(isset($_GET['page']))
{
  $page = htmlspecialchars($_GET["page"]);   //more sanitation can be added here and advised..htaccess or pregmatch.//

  if($page == 'home')
  {
  $title='Home';
  include $v1a; include $v1b; include $v1c; include $v1d; include $home; include $v1f; include $v1g;
  }
  if($page == 'about')
  {
  $title='About';
  include $v1a; include $v1b; include $v1c; include $v1d; include $about; include $v1f; include $v1g;
  }
  if($page == 'samples')
  {
  $title='Samples';
  include $v1a; include $v1b; include $v1c; include $v1d; include $samples; include $v1f; include $v1g;
  }
  if($page == 'support')
  {
  $title='Support';
  include $v1a; include $v1b; include $v1c; include $v1d; include $support; include $v1f; include $v1g;
  }
  if($page =='contact')
  {
  $title='Contact';
  include $v1a; include $v1b; include $v1c; include $v1d; include $contact; include $v1f; include $v1g;
  }
  if($page =='login')
  {
  $title='Login';
  include $v1a; include $v1b; include $v1c; include $v1d; include $login; include $v1f; include $v1g;
  }
  if($page =='profile')
  {
  $title='Profile';
  include $v1a; include $v1b; include $v1c; include $v1d; include $profile; include $v1f; include $v1g;
  }
  if($page =='blog')
  {
  $title='Blog';
  include $v1a; include $v1b; include $v1c; include $v1d; include $blog; include $v1f; include $v1g;
  }
  if($page =='ajaxer')
  {
  $title='Ajaxer';
  include $v1a; include $v1b; include $v1c; include $v1d; include $ajaxer; include $v1f; include $v1g;
  }

} else {
 $title='Home';
 include $v1a; include $v1b; include $v1c; include $v1d; include $home; include $v1f; include $v1g;
}
?>