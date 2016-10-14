

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
                    url : "bai17.php", // gửi ajax đến file bai17.php
                    type : "post", // chọn phương thức gửi là post
                    dateType:"text", // dữ liệu trả về dạng text
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                         search : $('#search').val()
                    },
                    success : function (data){
                        // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                        // đó vào thẻ div có id = query_ex
                        $('#query_ex').html(data);
                    }
                });
            } 
    

       </script>
    </head>
    <body>
        <div id="query_ex">
            Thông tin sẽ được load ở đây
        </div>
        <br/>
        Search : <input type="text" name="search_box" value=""/>
        <input type="submit" name="search" id="clickme" onclick="load_ajax()" value="Tim kiếm"/>



</head>
</tr>
</html>
</table>
