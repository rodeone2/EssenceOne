<div id="content"> <!---//PAGE CONTENT--->
        <h2>
          <?php echo $v1pn3;?>
        </h2><hr>
        <h3>Heading</h3>
        <p>Examples of Added Indexer Pages</p>
        <code>
        if $page='page?'; { get page? $pagevars } else { get default page $pagevars }<br />
        $pagevar1='';<br />
        if($page =='home')<br />
        {<br />
        $title='Home';<br />
        include $v1a; include $v1b; include $v1c; include $v1d; include $profile; include $v1f; include $v1g;<br />
        }<br />
        if($page =='blog')<br />
        {<br />
        $title='Blog';<br />
        include $v1a; include $v1b; include $v1c; include $v1d; include $blog; include $v1f; include $v1g;<br />
        }<br />
        } else {<br />
        $title='Home';<br />
        include $v1a; include $v1b; include $v1c; include $v1d; include $home; include $v1f; include $v1g;<br />
        }<br />
        Notice too how we can define the Title and Meta data and asign it just before !<br />
        </code>
        <p>Apache advises not to use .htaccess for sanitizing data. If we merely strip everything and sanitize what the user enters we will have a secure site. A simple pegmatch function and strpos here will handle that easily without bulky code. In turn we only allow what has been allowed within the browser window and nothing more. An even better way is by using Php Namespaces with Class and Functions.</p>


      </div> <!---//END PAGE CONTENT--->