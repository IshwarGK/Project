<html>

    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script>
        function searchq(){
            var searchtxt = $("input[name='search']").val();
            $.post("search_demo11.php", {searchval : searchtxt}, function(output) {
                 $("#output").html(output);
            });
                  
        }    
    </script>  
	
    </head>
    <body>
    
        <h1>Search web page</h1>
        <form action="search_demo.php" method="post"  >
        
            <input type="text" name="search" placeholder="search here" list="datalist2" onkeydown="searchq();" />
            <input type="submit" value=">>" />
            
            <div id="output" style="z-index: 10; position: absolute ; background-color: yellow;">
            
            </div>
            <div id="stable" style="">
                     <datalist id="datalist1">
                        <option value="Aundh">Aundh</option>
                        <option value="Baner">Baner</option>
                        <option value="Camp">Camp</option>
                        <option value="Deccan">Deccan</option>
                        <option value="F C Road">F C Road</option>
                        <option value="Hinjewadi">Hinjewadi</option>
                        <option value="J M Road">J M Road</option>
                        <option value="Kothrud">Kothrud</option>
                        <option value="Sinhgad Road">Sinhgad Road</option>
                        <option value="Shivaji Nagar">Shivaji Nagar</option>
                    </datalist>      
            </div>
            
        </form>
    </body>

</html>