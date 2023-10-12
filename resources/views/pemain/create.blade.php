@extends('layouts.app')

@section('content')
    <form action="{{route('pemain.store')}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="nama_pemain" class="col">Nama Pemain</label>
            <div class="col">
                <input type="text" name="nama_pemain" id="nama_pemain" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="no_punggung" class="col">No Punggung</label>
            <div class="col">
                <input type="text" name="no_punggung" id="no_punggung" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="posisi" class="col">Posisi</label>
            <div class="col">
                <input type="text" name="posisi" id="posisi" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <a href="/pemain" class="btn btn-danger col">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection