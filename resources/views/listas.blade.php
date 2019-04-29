<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>

<body>
    <div id="main" class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Menu</h1>
            </div>
            <div class="col-sm-4">
                <h1>Lista vue js - AJAX</h1>
                <ul class="list-group">
                    <li v-for="item in lists" class="list-group-item">
                        @{{ item.name }} - @{{ item.email }} 
                    </li>
                    <input type="text" name="" id="">
                </ul>
            </div>
            <div class="col-sm-8">
                <h1>Lista vue js - AJAX</h1>
                <pre>
                                @{{ $data | json }}
                            </pre>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/listas.js')}}"></script>
</body>

</html>