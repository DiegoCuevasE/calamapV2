
{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Administración de Mype')

@section('content_header')
@stop

@section('content')
<div class="col-md-1"></div>
    <div class="container-fluid col-md-10">
            <div class="row ">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center" ><h3>Estadísticas Historicas</h3></div>
        
                        <div class="panel-body">
                            <div class="row col-md-8"> 
                            <div class=""><h2><strong>{{$cantVisitas}}</strong></h2><h4>Visitas totales</h4></div>

                            </div>
                            <div class="mb-7">
                                
                            {!! $chart->html() !!}
                            <br>
                            <br>
                            <br>
                            <br>
                            </div>
                            <div class="row col-md-12 justify-content-center mt-9">
                                    <div class="col-md-6 mt-9">
                                {!!$pie->html() !!}
                                    </div>
                                    <div class="col-md-6 mt-9">
                                {!!$Gedad->html() !!}
                                    </div>
                                </div>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        {!! Charts::scripts() !!}
        {!! $pie->script() !!}
        {!! $chart->script() !!}
        {!! $Gedad->script() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop