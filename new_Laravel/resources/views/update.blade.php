<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='home/<?php echo $article->id; ?>' method='post'>
       @csrf
       Title<input type='text' name='title' value='<?php echo $article->title; ?>'>
       body<input type='text' name='body' value='<?php echo $article->body; ?>'>
       <button type='submit'>Update</button>

   </form>

</body>
</html>