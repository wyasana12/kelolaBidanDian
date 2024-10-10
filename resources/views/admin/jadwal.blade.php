@extends('panel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Daftar Jadwal</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/jadwal/create') }}">Add</a>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $item)
                            <tr>
                                <td>{{ $item->jadwal_id }}</td>
                                <td>{{ $item->time }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->date }}</td>
                                <td>
                                    {{-- <a href="{{ route('schedules.edit', $schedule->id) }}">Edit</a> --}}
                                    {{-- <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Hapus</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $jadwal->links() !!}
            </div>
        </div>
        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif
    @endsection
