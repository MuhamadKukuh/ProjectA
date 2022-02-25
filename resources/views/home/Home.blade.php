@extends('template.main')
@section('content')
    <div class="container pt-4">
        <div class="row ">
            @foreach ($kelas as $kelas)
            <div class="col-4 bg-secondary rounded text-center">
                Agenda Absen <br>
                <a href="/buku-absen/{{ $kelas->kelas }}">{{ $kelas->kelas }}</a>
            </div>
            @endforeach
        </div>
    </div>
    <a href="{{ url('/Dashboard') }}">Dashboard</a>

@endsection