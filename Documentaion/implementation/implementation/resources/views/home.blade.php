@extends('layouts.app')

@section('content')
<div class="container">
    <header class="row justify-content-center">
        <h2>appointments</h2>
    </header>
    <main>
        @if(@empty($docters[0]->name))
            <h3 class="d-flex justify-content-center text-black-50">There is no doctoral appointment</h3>
        @else
        <table class="table table-info">
            <thead>
                <td>Name</td>
                <td>Time</td>
                <td>Specialty</td>
            </thead>
            @foreach($docters as $docter)
                <tr>
                    <td>Doctor {{$docter->name}}</td>
                    <td>{{$docter->from}} - {{$docter->until}}</td>
                    <td>{{$docter->specialty}}</td>
                </tr>
            @endforeach
        </table>
        @endif
    </main>
</div>
@endsection
