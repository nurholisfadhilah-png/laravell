<x-app>
    <x-slot name="title">Daftar Mahasiswa</x-slot>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Mahasiswa</h2>
        <a href="{{ route('student.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

    <div class="card p-3 shadow-sm">
        <p class="text-muted mb-0">Belum ada data mahasiswa.</p>
    </div>
</x-app>