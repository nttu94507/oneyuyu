<html>
    <header>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </header>
    <body>
        <from action="/uploadfile" method="post">
            <input type="button" value="上傳文件" id="upload-button" >
            <input id="fileInput" type="file" style="display:none" />
        </form>
        <ul>
            <li id="filevalue"style="background:red;list-style-type:none" >test123</li>
        </ul>
        <h1>Laravel Quickstart</h1>

        @yield('content')
    </body>
    <script>
        $('#upload-button').click(function(){
            $('#fileInput').click();
        });
        $('#fileInput').change(function(){
            $('filevalue').text($('#fileInput').values())
        })
    </script>
</html>