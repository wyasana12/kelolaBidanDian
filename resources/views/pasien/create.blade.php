@extends('mylayout')
@section('content')
    <section class="section">
        <form action="{{ route('pasien.store') }}" method="POST">
            @include('_messages')
            @csrf
            <label for="name">Nama</label>
            <input type="text" name="nama" placeholder="Nama" required>

            <label for="nik">NIK</label>
            <input type="text" name="nik" placeholder="NIK" required>

            <label for="birthdate">Tanggal Lahir</label>
            <input type="date" name="tanggalLahir" required>

            <label for="gender">Jenis Kelamin</label>
            <select name="jenisKelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>

            <label for="phone">No. Telepon</label>
            <input type="text" name="phone" placeholder="No. Telepon" required>

            <label for="complaint">Keluhan</label>
            <textarea name="keluhan" placeholder="Keluhan Anda" required></textarea>

            <!-- Penambahan Input untuk Tanggal Konsultasi -->
            <label for="date">Pilih Tanggal Konsultasi</label>
            <input type="date" name="tanggalPesan" required>

            <label for="schedule_id">Pilih Waktu Konsultasi</label>
            <select name="jadwal_id" required>
                @foreach ($jadwal as $item)
                    <option value="{{ $item->jadwal_id }}">{{ $item->time }} - {{ $item->status }}</option>
                @endforeach
            </select>

            <button type="submit">Daftar Konsultasi</button>
        </form>
    </section>
@endsection