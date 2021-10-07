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
                <div class="upload-btn " onclick="" id="upload-button" ><h4>選擇檔案</h4></div>
                <input type="file" name="file" class="between hidden" id="fileInput" >
                <!-- <label class="bg" for="customFile">選擇檔案</label> -->
                <div class="test"><button class="between hidden" id="submit-btn">上傳檔案</button></div>

                
                
                
            </div>
        </form>
       
        @if($excel)
        <div class="lists">  
        <div class="list-item">
            <h3 class="colom">姓名</h3>
            <h3 class="colom">電話</h3>
            <h3 class="colom">地址</h3>
        </div>
        @foreach ($excel as $user)
        <div  class="list">
            <a class="colom">{{$user[0]}}</a>
            <a class="colom">{{$user[1]}}</a>
            <a class="colom">{{$user[2]}}</a>
        </div>
        @endforeach
        @else
        <div class="lists nodata">
            <h4>沒有資料</h4>
        </div>
        @endif
       </div>
       <div class="footer" ></div>

    </body>
    <script>
        $('#upload-button').click(function(){
            $('#fileInput').click();
            // alert('123');
        });

        $('#fileInput').on('change',function(){
            $('#submit-btn').click();
            // alert( $('#fileInput').val());
        })
    </script>
</html>