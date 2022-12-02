<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <form action="/name" method="get">
        @csrf
        <input type="text" name="name" placeholder="Enter Name To Access">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
