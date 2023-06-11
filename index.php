<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper">
        <h1>Welcome to my Website</h1>
        
        <div class="chat_wrapper">
            <div id="chat"></div>
            <form action="POST">
                <textarea name="message" cols="30" rows="10" class="textarea"></textarea>
            </form>
        </div>
    </div>

    <script>
        $('.textarea').keyup(function(e){
            if(e.which == 13){
                $('form').submit();
            }
        });
        $('form').submit(function(){
            alert('form is submitted using jquery');
            return false;
        });
    </script>
</body>
</html>