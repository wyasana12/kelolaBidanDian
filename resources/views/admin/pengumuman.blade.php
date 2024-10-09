@extends('panel.layouts.app')

@section('content')
  <div class="pagetitle">
    <h1>Pengumuman</h1>

  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/pengumumans/create') }}">Add</a>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengumuman as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $pengumuman->links() !!}
        </div>
    </div>
@endsection