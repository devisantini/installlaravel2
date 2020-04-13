@extends('master')
@section('content')
<div class="panel">
<form action="{{(isset($barang))?route('barang.update',$barang->id_pembeli):route('barang.store')}}" method="POST">
@csrf
@if(isset($operator))?@method('PUT')@endif
     <div class="panel-body">
          <h1> Input Pembeli</h1>
          <div class="form-group">
          <label class="col-sm-2 control-label text-right">Id Pembeli</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($barang))?$barang->id_pembeli:old('id_pembeli')}}" name="id_pembeli" class="form-control"></div>
                @error('id_pembeli')<small style="color:red">{{$message}}</small>@enderror
          </div>
          <div class="form-group">
          <label class="col-sm-2 control-label text-right">Nama Pembeli</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($barang))?$barang->nama:old('nama')}}" name="nama" class="form-control"></div>
                @error('nama')<small style="color:red">{{$message}}</small>@enderror
          </div>
               <div class="form-group"><label class="col-sm-2 control-label text-right">Alamat</label>
                   <div class="col-sm-10"><input type="text"  value="{{(isset($barang))?$barang->alamat:old('alamat')}}" name="alamat" class="form-control"></div>
                 @error('no_hp')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group">
                    <button type="submit">Simpan</button>
                </div>

    </div>
    </form>
    </div>
    @endsection
