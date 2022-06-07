<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form
    {
        display:flex;
        flex-direction:column;
    }
    input, button
    {
        margin: 10px;
        width:200px;
    }
</style>
<body>

{{$errors}}
<form action="form" method="post" >
    @csrf
    <input type="text" name="firstname" placeholder="firstname" >
    <span style="color: red;">@error('firstname'){{$message}}@enderror </span>
    <input type="text" name="email" placeholder="email">
    <span style="color: red;">@error('email'){{$message}}@enderror </span>
    <input type="password" name="password" placeholder="password">
    <span style="color: red;">@error('password'){{$message}}@enderror </span>
    <input type="number" name="phonenumber"  placeholder="phonenumber">
    <span style="color: red;">@error('phonenumber'){{$message}}@enderror </span>
    <button type="submit">submit</button>
</form>

</body>
</html>