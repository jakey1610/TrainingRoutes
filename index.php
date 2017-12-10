<!DOCTYPE html>
<html>
	<head>
		<link href = "stylesheet.css" rel = "stylesheet" type = "text/css" />
		<script src="jquery-3.2.1.min.js"></script>
	</head>
	
	<h1></h1>
	<h2>Table Number: <input type = "text" name = "tn" id="tn"/>
	<input type = "submit" value = "Confirm" onClick = "searchTN()"/></h2>
	<script>
		tableNum = 1;
    $(function(){
      function loadNum()
      {  
        $('h1').load('query.php?tableNum=' + tableNum);
        setTimeout(loadNum, 3000);
      }
      loadNum();
    });

    function searchTN() {
    	tableNum = document.getElementById("tn").value;
    	$.get("query.php?tableNum=" + tableNum).done(function(data){
    		$("h1").html(data);
    	});
    }


 	</script>
</html>