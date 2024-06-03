<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script
            src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossorigin="anonymous">
        </script>
    </head>
    <body class="antialiased">
        <h1>
            Форма
        </h1>
        <br>
        <form action="/edit/{{$id}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" class="form-control" name="form" value="true">
            <div class="input-group p-4">
                <span class="input-group-text">ФИО: </span>
                <input type="text" class="form-control" name="fio" placeholder="" value="{{$name}}">
            </div>
            <div class="input-group p-4">
                <span class="input-group-text">Телефон: </span>
                <input type="text" class="form-control" name="phone" placeholder="" value="{{$phone}}">
            </div>
            <button type="submit" class="btn btn-secondary btn-lg btn-block m-4">Сохаранить</button>
        </form>
        <br>
        <br>
    </body>
</html>
