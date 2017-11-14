<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
<h3>Upload File</h3>
  <form class="form-inline" action="/loadcsv" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    {{ csrf_field() }}
      <label for="file">Select File:</label>
      <input class="form-control" type="file" name="files[]" multiple/>
      <input class="btn" type="submit" value="upload file">
    </div>
      
  </form>
</div>
</body>
</html>