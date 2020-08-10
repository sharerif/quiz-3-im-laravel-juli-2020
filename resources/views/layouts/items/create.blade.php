@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create New Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action='/posts' method='POST'>
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_proyek">Nama Proyek</label>
                    <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="{{old('nama_proyek', '')}}" placeholder="Enter Nama Proyek">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi_proyek">Deskripsi Proyek</label>
                    <input type="text" class="form-control" id="deskripsi_proyek" value="{{old('deskripsi_proyek', '')}}" name="deskripsi_proyek"  placeholder="Deskripsi Proyek">
                    @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{old('tanggal_mulai', '')}}" placeholder="Enter Tanggal Mulai">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_deadline">Tanggal Deadline</label>
                    <input type="date" class="form-control" id="tanggal_deadline" name="tanggal_deadline" value="{{old('tanggal_deadline', '')}}" placeholder="Enter Tanggal Deadline">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status"">
                        <option value="Indonesian"> True </option>
                        <option value="Singaporean"> False </option>
                    </select>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="manager_id">Manager ID</label>
                    <input type="text" class="form-control" id="manager_id" name="manager_id" value="{{old('manager_id', '')}}" placeholder="Enter Manager ID">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection