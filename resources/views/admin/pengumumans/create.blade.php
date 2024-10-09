@extends('panel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Pengumuman</h1>

    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Pengumuman</h5>
                        <form action="{{ route('admin.pengumumans.store') }}" method="post">
                          @csrf
                        <div class="row mb-3">
                            <label class="font-weight-bold">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                value="{{ old('judul') }}" required>

                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label class="font-weight-bold">DESCRIPTION</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="deskripsi" rows="5"
                                required>{{ old('description') }}</textarea>
                            <!-- error message untuk description -->
                            @error('deskripsi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- End Quill Editor Default -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Submit Button</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
    </section>
@endsection
