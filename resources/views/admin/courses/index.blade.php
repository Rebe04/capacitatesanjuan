@extends('adminlte::page')
@section('title', 'Capacitate San Juan')

@section('content_header')
    <h1>Cursos pendientes de aprobación</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-stripe">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Categoría</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td> {{$course->id}} </td>
                            <td> {{$course->title}} </td>
                            <td> {{$course->category->name}} </td>
                            <td> <a href=" {{route('admin.courses.show', $course)}} " class="btn btn-primary">Revisar</a></td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$courses->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop