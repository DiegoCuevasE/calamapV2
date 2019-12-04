<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{ asset('dashboard/img/favicon.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>
          Calama Turística
        </title>
        
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link href="{{ asset('dashboard/css/style-dashboard.css')}}" rel="stylesheet" />
        <link href="{{ asset('dashboard/css/delete.css')}}" rel="stylesheet" />

</head>

<body style="background-color: white">
        <div style="width: 300px">
        <img src="{{ asset('template2/images/logockalamaweb.png') }}" alt="Image" class="img-fluid">
        </div>
    <br>
    <h4>Listado de Socios de la plataforma</h4>
    <table class="table">
        <thead class=" text-primary">
            <tr >
                <th class="font-weight-bold">ID</th>
                <th class="font-weight-bold">Nombre</th>
                <th class="font-weight-bold">Celular</th>
                <th class="font-weight-bold">Telefono</th>
                <th class="font-weight-bold">Correo</th>
                <th class="font-weight-bold">Mypes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->nombre.' '.$user->apellido_usuario}}</td>
                <td>{{$user->celular_usuario}}</td>
                <td>{{$user->telefono_usuario}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mypes->count()}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="{{ asset('dashboard/js/core/jquery.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/core/bootstrap-material-design.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
</body>

</html>