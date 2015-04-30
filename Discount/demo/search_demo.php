<html>

    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script>
        function searchq(){
            var searchtxt = $("input[name='search']").val();
            $.post("search_demo12.php", {searchval : searchtxt}, function(output) {
                 $("#output").html(output);
            });
                  
        }    
    </script>    
	
    </head>
    <body>
    
        <h1>Search web page</h1>
        <form action="search_demo.php" method="post"  >
        
            <input type="text" name="search" placeholder="search here" onkeydown="searchq();" />
            <input type="submit" value=">>" />
            
            <div id="output" style="z-index: 10; position: absolute ; background-color: yellow;">
            
            </div>
            <div id="stable" style="">
            kalksjdlkas
                akjsdnaksd
                daskndas</br>
            
                dasdnaskldk
        </br>    aasdnaksjnd
                akdaskd
                
            </div>
            
        </form>
    </body>

</html>