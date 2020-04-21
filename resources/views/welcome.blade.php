
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ATG task</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">


        <form method="get" action="/t">
@csrf
<div class="jumbotron">
    <div class="form-group">
        <label for="nm">Name</label>
        <input type="text" class="form-control" name="name" id="nm" >
        @if($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
        @endif
        <label for="em">Email</label>
        <input type="email" class="form-control" name="email" id="em">
        @if($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
        @endif
        <label for="pin">Pincode</label>
        <input type="number" class="form-control" name="pincode" id="pin">
        @if($errors->has('pincode'))
            <div class="error">{{ $errors->first('pincode') }}</div>
        @endif
        <br>
        <input type="submit" class="btn btn-primary ">

    </div>
</div>
</form>

</div>

</body>
</html>





