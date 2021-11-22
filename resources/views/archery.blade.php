<html>
    <header>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </header>
    <body>
        <div class="middle">
            <div class="upload-form">
                <a href="{{ url('/archery') }}" class="logo"><i class="fi fi-rr-home p100"></i></a>
            </div>
        </div>
        <div>
            <p>計分</p>
            <input type="text" name="shot1" >
            <input type="text" name="shot2" maxlength=2>
            <input type="text" name="shot3" maxlength=2>
            <input type="text" name="shot4" maxlength=2>
            <input type="text" name="shot5" maxlength=2>
            <input type="text" name="shot6" maxlength=2 >
        </div>
        <button name="pointX" onclick="">1</button>
    </body>
    <script>
        $(document).ready(function (){
            $("input[name='shot1']").focus();  
        });
        $('input').keyup(function(){   
            $(this).next(':input').focus();   
         
        });  
    </script>
</html>
<script>