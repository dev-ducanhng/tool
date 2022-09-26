
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
    <script src="./../js/add.js"></script>
</head>

<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Laravel 9 Import Export Excel & CSV File - <a href="https://techvblogs.com/blog/laravel-9-import-export-excel-csv-file" target="_blank">TechvBlogs</a>
        </h2>
       
        <form  method="POST" action="/add" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile" >
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="form-group d-none">
                    <label for="">Link</label>
                    <input type="text" value="{{$link}}" name="link" class="form-control">
                </div>
                <div class="form-group d-none">
                    <label for="" class="">Token</label>
                    <input type="text" value="{{$token}}" name="token" class="form-control">
                </div>
             
                <div class="form-group">
                    <label for="" class="">Cột title trong excel</label>
                    <input type="number" value="" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="">Cột content trong excel</label>
                    <input type="number" value="" name="content" class="form-control">
                </div>
                <div class="form-check">
                    <label for="">Danh Mục</label><br>
                    <div class=" text-left">
                        {{-- <input type="checkbox" class="form-check-input"  name="category[]" value="1111111111111"> --}}
                         @foreach ($response as $item)
                    
                        <input type="checkbox" class="form-check-input"  name="category[]" value="{{$item->id}}">
                     <label class="form-check-label" for="vehicle1"> {{$item->name}}</label><br>
                    @endforeach
                    </div>
                   
                    
                </div>
            </div>

            <button   class=" btn btn-primary">OK</button>
            
        </form>
       
    </div>
</body>

</html>

<script>
 $('.ajaxx').on('click',function(){
    $.ajax({
        url: "/call-cate",
        // dataType:'jsonp', 
        type: 'GET',
        dataType: 'json',
        success: function(data){
        console.log(data);
        }});



   
});

</script>


<script src="{{asset('js/add.js')}}" type="text/JavaScript">

</script>