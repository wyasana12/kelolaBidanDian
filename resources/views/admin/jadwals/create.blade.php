@extends('panel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Jadwal</h1>

    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Jadwal</h5>
                        <form action="{{ route('admin.jadwals.store') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="time">Waktu</label>
                                <input type="time" name="time" required>
                            </div>
                            <div class="row mb-3">
                                <label for="date">Tanggal</label>
                                <input type="date" name="date" required>
                            </div>
                            <!-- End Quill Editor Default -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan Jadwal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </section>
@endsection
