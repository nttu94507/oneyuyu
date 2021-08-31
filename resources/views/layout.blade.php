<html>
    <header>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </header>
    <body>
    <form action="{{ route('uploadfile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import data</button>
            <a class="btn btn-success" href="{{ route('uploadfile') }}">Export data</a>
        </form>
        <ul>
            
            @foreach ($excel as $user)
                <li id="filevalue"style="background:red;list-style-type:none" >{{$user->0}}</li>
            @endforeach
        
        </ul>
        <h1>Laravel Quickstart</h1>

        @yield('content')
    </body>
    <script>
        $('#upload-button').click(function(){
            $('#fileInput').click();
        });
    </script>
</html>