<html>
    @include('header')
    <body>
    <div class="middle">
        <div class="upload-form">
            <a href="{{ url('/users') }}" class="logo"><i class="fi fi-rr-home p100"></i></a>
        </div>
    
        <!-- <a href="{{ url('/users') }}" class="logo"><img src="https://img.icons8.com/ios/50/000000/person-at-home.png" class="p100"/></a> -->
        <form action="{{ url('/UploadFile') }}" method="POST" enctype="multipart/form-data">
             @csrf
            <div class="upload-form" >
                <div class="upload-btn " onclick="" id="upload-button" ><h4> 選擇檔案 </h4></div>
                <input type="file" name="file" class="between hidden" id="fileInput" >
                <div class="test"><button class="between hidden" id="submit-btn">上傳檔案</button></div>
            </div>
        </form>
    </div>   
        @if($excel)
        <div class="lists">  
        <div class="list-item">
            <h3 class="colom">姓名</h3>
            <h3 class="colom">電話</h3>
            <h3 class="colom">地址</h3>
        </div>
        @foreach ($excel as $user)
        <div  class="list">
            <a class="colom">{{$user['name']}}</a>
            <a class="colom">{{$user['email']}}</a>
            <a class="colom">{{$user['address']}}</a>
        </div>
        @endforeach
        @else
        <div class="lists nodata">
            <h3>沒有資料</h3>
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