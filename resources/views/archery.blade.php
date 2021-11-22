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
        <form action="{{ url('/submitscore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <p>計分</p>
                <input type="text" name="shot1" ><input type="text" name="show1" >
                <input type="text" name="shot2" ><input type="text" name="show2" >
                <input type="text" name="shot3" ><input type="text" name="show3" >
                <input type="text" name="shot4" ><input type="text" name="show4" >
                <input type="text" name="shot5" ><input type="text" name="show5" >
                <input type="text" name="shot6" ><input type="text" name="show6" >
                <input type="text" name="shotX" ><input type="hidden" name="shotM" >
            </div>
            <div>
                <a name="pointX" onclick="">X</a>
                <a name="pointX" onclick="">10</a>
                <a name="pointX" onclick="">9</a>
                <a name="pointX" onclick="">8</a>
                <a name="pointX" onclick="">7</a>
                <a name="pointX" onclick="">6</a>
                <a name="pointX" onclick="">5</a>
                <a name="pointX" onclick="">M</a>
                <a name="pointclear" onclick="">clear</a>
            </div>
            <div>
                <input type="submit" value="送出成績">
            </div>
        </form>
    </body>
    <script>
        let shotnum = 1
        let shotname = "shot"+shotnum;
        let showname = "show"+shotnum;
        $(document).ready(function (){
            $("input[name='show1']").focus();  
        });
        $("a[name='pointX']").click(function(){
            
            if($(this).text()=="X"){
                $("input[name='shotX']").val();
                $("input[name='"+shotname+"']").val(10);
            } else if ($(this).text()=="M"){
                $("input[name='"+shotname+"']").val(0);
            }else{
                $("input[name='"+shotname+"']").val($(this).text());
            }
            $("input[name='"+showname+"']").val($(this).text());
            if(shotnum<6){
                shotnum = shotnum+1
            }else{
                shotnum = 1
            }
            showname = "show"+shotnum;
            $("input[name='"+showname+"']").focus();
            
        })
        $("button[name='pointclear']").click(function(){
            $("input").val('');
        })
    </script>
</html>
<script>