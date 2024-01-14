<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="{{url('upload')}}" method="post" enctype ="multypart/form_data"> 
    @csrf  
<input type="text" name="name" class="form-control" placeholder="index number" />
<input type="file" name="file" />
<input type="submit" />
<input type="submit" name="submit" role="button" value="Search">


</form>   
</body>
</html>