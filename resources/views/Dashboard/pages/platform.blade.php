@extends('Dashboard.layouts.templates')

@section('content')
<div class="content">
    <div class="container-fluid">
        {{-- Header judul halaman --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0 font-weight-bold text-primary">Platform Suara Merdeka</h4>
            <a href="{{ url('/cms/addplatform') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
        </div>

        {{-- Bagian Tampilan Platform (dari desain Suara Merdeka) --}}
        <div class="card shadow-sm">
            <div class="card-body text-center" style="background-color: #d9eaff;">

                <div class="platform-section">
                    <h1>Suara Merdeka Generation</h1>
                    <p>Jangkau informasi lebih luas dengan berbagai platform kami!</p>

                    <div class="circle-icons mb-4 d-flex justify-content-center gap-3 flex-wrap">
                        @foreach ($data['get_data'] as $platform)
                            <a href="#" class="circle-icon d-flex justify-content-center align-items-center"
                               style="background: white; width: 60px; height: 60px; border-radius: 50%; box-shadow: 0 0 4px rgba(0,0,0,0.12);">
                                <img src="{{ asset('storage/' . $platform->thumbnail_platform) }}" alt="{{ $platform->name_socmed }}" style="width:30px; height:30px;">
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Tabel Data Platform --}}
                <div class="table-responsive mt-5">
                    <table class="table table-bordered table-hover align-items-center">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Thumbnail</th>
                                <th class="text-center">Nama Platform</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($data['get_data'] as $platform)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/' . $platform->thumbnail_platform) }}" alt="{{ $platform->name_socmed }}" style="max-height: 70px;">
                                    </td>
                                    <td class="text-center">{{ $platform->name_socmed }}</td>
                                    <td class="text-center">
                                        <a href="/cms/{{ $platform->id }}/editplatform" class="btn btn-sm btn-primary me-1">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="/cms/platform/{{ $platform->id }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger me-1">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                        <a href="/cms/{{ $platform->id }}/detail_platform" class="btn btn-sm btn-warning text-dark">
                                            <i class="fa fa-info-circle"></i> Detail
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $data['get_data']->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Styling tambahan (dari desain suara_merdeka) --}}
<style>
.platform-section h1 {
    font-weight: 700;
    margin-bottom: 15px;
}
.circle-icon img {
    transition: transform 0.3s;
}
.circle-icon:hover img {
    transform: scale(1.1);
}
</style>
@endsection
