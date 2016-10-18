

<!DOCTYPE html>
<html>
    <head>

<tr>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  
    </form>
     <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       <script language="javascript">
             

            function load_ajax()
{
    $.ajax({
        type : 'POST',
        dataType : 'json',
        url : 'bai17.php',
        data : 'id=' + $('#search_box').val(),
        success : function(data) {

            $('#data').html(result);
            
        }

    });
}
    

       </script>
    </head>
    <body>
        <div id="result">
            Thông tin sẽ được load ở đây
        </div>
        <br/>
        Search : <input type="text" name=search_box id="search_box" value="" class = "form-control"/>
        <input type="submit" name="search" id="clickme" onclick="load_ajax()" value="Tim kiếm"/>



</head>
</tr>
</html>
</table>
