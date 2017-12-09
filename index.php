<!DOCTYPE html>
<html>
	<script>
    $(function(){
      function loadNum()
      {  
        $('h1.countdown').load('query.php');
        setTimeout(loadNum, 3000);
      }
      loadNum();
    });
 </script>
</html>