
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 9 Import Export Excel & CSV File - TechvBlogs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- <script src="jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
</head>

<body>
    <div class="container mt-5 text-center">
        
        @if (Session::has('message_register_success'))
                                <p class="login-box-msg text-success">{{ Session::get('msg') }}</p>
                            @endif
        <form  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
               
                <div class="form-group">
                    <label for="">Link (https://dichoixa.net/)</label>
                    <input type="text" name="link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="ajaxx">Token</label>
                    <input type="text" name="token" class="form-control">
                </div>
                
            </div>

            <button   class=" btn btn-primary">Import Users</button>
            
        </form>
        
    </div>
</body>

</html>