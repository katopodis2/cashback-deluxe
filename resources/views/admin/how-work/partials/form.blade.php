<?php
$url = "";
$route = "store";
if (!empty($item)){
    $id= $item->id;
    $title= $item->title;
    $text= $item->text;
    $url = $item->img;
    $route = "update";
}


?>

<form action="{{route("admin.how-work.$route",$id??"")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <div><label for="title">{{__("form.title")}}</label></div>
        <input class="w-100" type="text" id="title" name="title" value="{{old('title')??($title??'')}}">
        @if($errors->has('title'))
            <div class="error">{{ $errors->first('title') }}</div>
        @endif
    </div>
    <div>
        <div><label  for="desc">{{__("form.description")}}</label></div>
        <textarea class="w-100" style="height: 150px" id="desc" type="text" name="text" >{{old('text')??($text??'')}}</textarea>
        @if($errors->has('text'))
            <div class="error">{{ $errors->first('text') }}</div>
        @endif
    </div>

    <picture>
        <div id="preview">
            <img src="{{url('storage/images/howWork/'.$url)}}" alt="">
        </div>
    </picture>
    <div><input type="file" name="img"  onchange=previewFiles() ></div>
    @if($errors->has('img'))
        <div class="error">{{ $errors->first('img') }}</div>
    @endif
    <div><button type="submit" >submit</button></div>
</form>
<style>
    .error{
        color: red;
    }
</style>
@push('bottom_js')
    <script>

        function previewFiles() {

            $('#preview').empty();
            var preview = document.querySelector('#preview');
            var files = document.querySelector('input[type=file]').files;

            function readAndPreview(file) {

                // Make sure `file.name` matches our extensions criteria
                if (/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    var reader = new FileReader();

                    reader.addEventListener('load', function () {
                        var image = new Image();
                        image.height = 100;
                        image.width = 100;
                        image.title = file.name;
                        image.src = this.result;
                        image.classList.add('img-check');
                        preview.appendChild(image);
                    }, false);

                    reader.readAsDataURL(file);
                }

            }

            if (files) {
                [].forEach.call(files, readAndPreview);
            }

        }
    </script>
@endpush
