<html>
    <header>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
    </header>
    <body>
    <form action="{{ route('uploadfile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="middle" >
                <input type="file" name="file" class="between" id="customFile" >
                <!-- <label class="bg" for="customFile">選擇檔案</label> -->
                <div class="test"><button class="between" >上傳檔案</button></div>
                
                
                
            </div>
        </form>
       <div class="lists">  
       <div class="list-item">
            <h3 class="colom">姓名</h3>
            <h3 class="colom">電話</h3>
            <h3 class="colom">地址</h3>
        </div>
        @if($excel)
        @foreach ($excel as $user)
        <div  class="list">
            <a class="colom">{{$user[0]}}</a>
            <a class="colom">{{$user[1]}}</a>
            <a class="colom">{{$user[2]}}</a>
        </div>
        @endforeach
        @endif
       </div>

    </body>
    <script>
        $('#upload-button').click(function(){
            $('#fileInput').click();
        });
    </script>
</html>