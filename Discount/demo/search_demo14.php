<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>

<select id="foo">
    <option value="">Pick a site</option>
    <option value="http://www.google.com">x</option>
    <option value="http://www.yahoo.com">y</option>
</select>

<script>
    document.getElementById("foo").onchange = function() {
        if (this.selectedIndex!==0) {
            window.location.href = this.value;
        }        
    };
</script>