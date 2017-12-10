<!DOCTYPE html>
<html>
	<script src="jquery-3.2.1.min.js"></script>
	<h1></h1>
	<script>
    $(function(){
      function loadNum()
      {  
        $('h1').load('query.php');
        setTimeout(loadNum, 3000);
      }
      loadNum();
    });
 	</script>
</html>