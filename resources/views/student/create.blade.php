<x-app>
    <x-slot name="title">Tambah Mahasiswa</x-slot>

    <h2>Form Tambah Mahasiswa</h2>
    <div class="card p-4 shadow-sm mt-3">
      <form action="{{ route('student.store') }}" method="POST"></form>
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama...">
            </div>
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM...">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('student.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</x-app>