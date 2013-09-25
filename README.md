lisiframeresize
===============

tiny script to resize an Iframe with other domainname.


How it works:

The script takes the first Iframe and resizes it to the wanted height.  


The embedded Iframe needs to integrate an Iframe/skript like this
    <script type="text/javascript">    
        $(window).load(function() { 
            $('body').append('<iframe src="http://[your EZ Url]/resize/iframe/' + $('#footer').offset().top + '" style="display:none;" id="resizeIframe"></iframe>');
        });
    </script>    

"#footer" should be the last element before the closing body tag.  

The external Iframe calls the skript on your Site and delivers its actual height. 
Now the skript can resize the original Iframe.  