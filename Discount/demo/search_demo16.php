<html>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/jquery/jquery-2.1.3.min.js"></script>
    
    </head>
    <body>
		<script>
			function myFunction(){
				var x = $('#search').val();
				var z = $('#datalist1');
				var val = $(z).find('option[value="' + x + '"]');
				var endval = val.attr('value');
			//	var x = document.getElementById("datalist1").options[0].value;
    			alert(endval);
			}
		</script>
    
        <h1>Search web page</h1>
        <form onsubmit="myFunction()">
        
            <input id="search" type="search" name="search" placeholder="search here" list="datalist1" />
            <input type="submit" value="submit" />
           
            
                     <datalist id="datalist1">
                         <option value="Airtel"></option>
                         <option value="BSNL"></option>
                         <option value="Hathway"></option>
                         <option value="Tata Docomo"></option>
                         <option value="Tikona"></option>
                         <option value="You Broadband"></option>
    
                         <option value="Unlimited"></option>
                         <option value="DayNight"></option>
                         <option value="GB-Plan"></option>
    
                         <option value="Airtel Unlimited"></option>
                         <option value="BSNL Unlimited"></option>
                         <option value="Hathway Unlimited"></option>
                         <option value="Tata Docomo Unlimited"></option>
                         <option value="Tikona Unlimited"></option>
                         <option value="Broadband Unlimited"></option>
    
                         <option value="Airtel DayNight"></option>
                         <option value="BSNL DayNight"></option>
                         <option value="Hathway DayNight"></option>
                         <option value="Tata Docomo DayNight"></option>
                         <option value="Tikona DayNight"></option>
                         <option value="You Broadband DayNight"></option>
    
                         <option value="Airtel GB-Plan"></option>
                         <option value="BSNL GB-Plan"></option>
                         <option value="Hathway GB-Plan"></option>
                         <option value="Tata Docomo GB-Plan"></option>
                         <option value="Tikona GB-Plan"></option>
                         <option value="You Broadband GB-Plan"></option>
    
                         <option value="Airtel 1-month"></option>
                         <option value="BSNL 1-month"></option>
                         <option value="Hathway 1-month"></option>
                         <option value="Tata Docomo 1-month"></option>
                         <option value="Tikona 1-month"></option>
                         <option value="You Broadband 1-month"></option>
    
                         <option value="Airtel 3-month"></option>
                         <option value="BSNL 3-month"></option>
                         <option value="Hathway 3-month"></option>
                         <option value="Tata Docomo 3-month"></option>
                         <option value="Tikona 3-month"></option>
                         <option value="You Broadband 3-month"></option>
    
                         <option value="Airtel 6-month"></option>
                         <option value="BSNL 6-month"></option>
                         <option value="Hathway 6-month"></option>
                         <option value="Tata Docomo 6-month"></option>
                         <option value="Tikona 6-month"></option>
                         <option value="You Broadband 6-month"></option>
    
                          <option value="Airtel 12-month"></option>
                         <option value="BSNL 12-month"></option>
                         <option value="Hathway 12-month"></option>
                         <option value="Tata Docomo 12-month"></option>
                         <option value="Tikona 12-month"></option>
                         <option value="You Broadband 12-month"></option>
    
                         <option value="Airtel 24-month"></option>
                         <option value="BSNL 24-month"></option>
                         <option value="Hathway 24-month"></option>
                         <option value="Tata Docomo 24-month"></option>
                         <option value="Tikona 24-month"></option>
                         <option value="You Broadband 24-month"></option>
                         
                         <option value="Airtel 2 Mbps"></option>
                         <option value="BSNL 2 Mbps"></option>
                         <option value="Hathway 2 Mbps"></option>
                         <option value="Tata Docomo 2 Mbps"></option>
                         <option value="Tikona 2 Mbps"></option>
                         <option value="You Broadband 2 Mbps"></option>
    
                         <option value="Airtel 4 Mbps"></option>
                         <option value="BSNL 4 Mbps"></option>
                         <option value="Hathway 4 Mbps"></option>
                         <option value="Tata Docomo 4 Mbps"></option>
                         <option value="Tikona 4 Mbps"></option>
                         <option value="You Broadband 4 Mbps"></option>
                   </datalist>      
            
        </form>
		<p id="demo"></p>
    </body>

</html>