

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
    // URL
    var url = "bai17.php";
 
    // Data
    var data = {
        id : $('#search_box').val()
    };
 
    // Success Function
    var success = function (result){
        $('#result').html(result);
    };
 
    // Result Type
    var dataType = 'text';
 
    // Send Ajax
    $.post(url, data, success, dataType);
}
    

       </script>
    </head>
    <body>
        <div id="result">
            Thông tin sẽ được load ở đây
        </div>
        <br/>
        Search : <input type="text" name="search_box" value=""/>
        <input type="submit" name="search" id="search" onclick="load_ajax()" value="Tim kiếm"/>



</head>
</tr>
</html>
</table>
