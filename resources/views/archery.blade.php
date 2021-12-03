<html>
    @include('header')
    
    <body >
        <div class="middle">
            <div class="upload-form">
                <a href="{{ url('/archery') }}" class="logo"><i class="fi fi-rr-home p100"></i></a>
            </div>
            <div class="upload-form" >
                <a href="{{ url('/archery') }}"><div class="upload-btn "  id="create-match" ><h4>建立賽局 </h4></div></a>
                <input type="file" name="file" class="between hidden" id="fileInput" >
                <div class="test"><button class="between hidden" id="submit-btn">上傳檔案</button></div>
            </div>
        </div>
        <div class="lists">
        <p>計分</p>
        <form action="{{ url('/submitscore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <input type="text" name="shot1" >
                <input type="text" name="shot2" >
                <input type="text" name="shot3" >
                <input type="text" name="shot4" >
                <input type="text" name="shot5" >
                <input type="text" name="shot6" >
            </div>
            <div>
            <h3>總分<input type="number" name="total" value=0><h3>
            </div>
            <div class="scorebtn">
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
            <h3>選手帳號<input type="text" name="userac"> </h3>
                    <button>送出成績</button>
            </div>
        </form>
        </div>    
        
    </body>
    <script>
        let shotnum = 1
        let shotname = "shot"+shotnum;
        let x = 0;
        
        $(document).ready(function (){ 
            $("input[name='shotX']").val(0);
        });
        $("a[name='pointX']").click(function(){
            if($(this).text()=="X"){

                $("input[name='"+shotname+"']").val("X");
                total = parseInt($("input[name='total']").val());
                total = (total+10);
                $("input[name='total']").val(total);

            } else if ($(this).text()=="M"){
                
                $("input[name='"+shotname+"']").val(0);
            
            }else{
                
                $("input[name='"+shotname+"']").val($(this).text());
                total = parseInt($("input[name='total']").val());
                num = parseInt($(this).text());
                total = total+num
                $("input[name='total']").val(total);

            }
            if(shotnum<6){
                shotnum = shotnum+1
            }else{
                shotnum = 1
                alert("請送出分數或者清除重新輸入");
            }
            shotname = "shot"+shotnum;
            
        })
        $("a[name='pointclear']").click(function(){
            $("input").val('');
            $("input[name='total']").val(0);
            $("input[name='shot1']").focus();  
        })
        $('#create-match').click(function(){
            
        });
    </script>
</html>
<script>