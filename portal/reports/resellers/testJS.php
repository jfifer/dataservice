<!doctype html>
<html>
<head>

    <title>How to get <a> href value using jQuery</title>
    
    <style>
        body{
            text-align: center;
            font-family: arial;
            font-size: 21px;
        }
   
        .button{
            margin:20px;
            font-size:16px;
            font-weight: bold;
            padding:5px 10px;
        }
        
    </style>


</head>
<body>
    This link points to <a href="http://runnable.com/">runnable.com</a><br />
    <input type="button" value="Get link's href value" class="button" /><br />
    <span id="results"></span>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>

        //When DOM loaded we attach click event to button
        $(document).ready(function() {
            
            $('.button').click(function(){

                //we select the first link 
                //then call the attr method to get back the href value
                var href = $('a:first').attr('href');

                //update the results span with the href value
                $('#results').html(href);
            });
            
        });

    </script>

</body>
</html>