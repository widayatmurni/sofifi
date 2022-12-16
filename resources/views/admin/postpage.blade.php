<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name')}}</title>
  {{-- STYLES --}}
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  {{-- FONTS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  
  @stack('headerResources')
</head>
<body>
  <form action="{{ route('postpage') }}" method="post">
    <div class="">
      @csrf
      <div class="">
        <label for="">Title</label>
        <input type="text" name="title">
      </div>
      <div class="">
        <label for="">Slug</label>
        <input type="text" name="slug">
      </div>
      <div class="">
        <label for="">Lang</label>
        <input type="text" name="language_id">
      </div>
      <div class="">
        <label for="">Content</label>
        <textarea name="page" class="my-editor" id="" cols="30" rows="10"></textarea>
      </div>
    </div>
    <input type="submit" value="Simpan">
  </form>

  <script src="https://cdn.tiny.cloud/1/m1nz6lkq0ki8c21mhmdrhi8pfa5sjru7d79jblmku8iu0e3u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    var editor_config = {
      content_css:"http://dev.local:8000/assets/css/style.css",
      path_absolute : "/",
      selector: 'textarea.my-editor',
      relative_urls: false,
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table directionality",
        "emoticons template paste textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      file_picker_callback : function(callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
  
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }
  
        tinyMCE.activeEditor.windowManager.openUrl({
          url : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no",
          onMessage: (api, message) => {
            callback(message.content);
          }
        });
      }
    };
  
    tinymce.init(editor_config);
  </script>
</body>
</html>