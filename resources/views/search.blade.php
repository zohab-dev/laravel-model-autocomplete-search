<!DOCTYPE html>
<html>
<head>
    <title>Laravel Autocomplete from database by dev-zohab</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <script src="{{asset('js\app.js')}}" defer></script>
</head>
<body>



<div class="container">
    <h5>Laravel Autocomplete from database by dev-zohab using laravel only</h5>
    <input class="typeahead form-control" type="text">
</div>

<div class="container" id="app">
    <h5>Laravel Autocomplete from database by dev-zohab using <span class="text-danger">laravel and vue js</span></h5>
    <example-component>
    </example-component>
</div>

<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { input: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

</body>
</html>
