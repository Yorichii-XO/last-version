<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    
/* Style for Active Mode */
.btn-success {
    background-color: green;
    color: white;
}

/* Style for Inactive Mode */
.btn-danger {
    background-color: red;
    color: white;
}

</style>
<body>
    @if($mode === 'active')
   
    <button class="btn btn-success">Active</button>
    <button class="btn btn-secondary">Inactive</button>
@else
<button class="btn btn-danger">Inactive</button>
<button class="btn btn-secondary">Active</button>


@endif

</body>
</html>