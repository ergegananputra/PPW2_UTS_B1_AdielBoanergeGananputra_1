@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nama Pemain</th>
            <th scope="col">No Punggung</th>
            <th scope="col">Posisi</th>
        </thead>
        <tbody>
            @foreach ($pemain as $player)
                <tr>
                    <td>{{$player->id}}</td>
                    <td>{{$player->nama_pemain}}</td>
                    <td>{{$player->no_punggung}}</td>
                    <td>{{$player->posisi}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('pemain.create')}}" class="btn btn-primary">Tambah Pemain</a>
@endsection