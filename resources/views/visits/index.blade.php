@extends('layouts.fkik.index', ['title' => 'Halaman Data Pengunjung', 'page_heading' => 'Daftar Pengunjung'])

@section('content')
    <div class="card">
        <div class="row">
            <div class="col-lg-12">

                {{-- <a href="{{ route('excel.kunjungan.export') }}" class="btn btn-success float-right mt-3 mx-3"
                    data-toggle="tooltip" title="Export Excel">
                    <i class="fas fa-fw fa-file-excel"></i>
                </a> --}}

            </div>
        </div>
        <div class="row px-3 py-3">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jam Keluar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visit as $visit)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $visit->name }}</td>
                                    <td>{{ Str::limit($visit->description, 55, '...') }}</td>
                                    <td>{{ $visit->created_at }}</td>
                                    <td class="text-center">
                                        <a data-id="{{ $visit->id }}" class="btn btn-sm btn-info text-white show_modal"
                                            data-toggle="modal" data-target="#show_visit">
                                            <i class="fas fa-fw fa-info"></i>
                                        </a>
                                        {{-- <a data-id="{{ $visit->id }}" class="btn btn-sm btn-success text-white swal-edit-button" data-toggle="modal" data-target="#visit_edit_modal" data-placement="top" title="Ubah data">
                  <i class="fas fa-fw fa-edit"></i>
                </a> --}}
                                        <a data-id="{{ $visit->id }}"
                                            class="btn btn-sm btn-danger text-white swal-delete-button"
                                            data-toggle="tooltip" data-placement="top" title="Hapus data">
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('modal')
    {{-- @include('visits.modal.create') --}}
    @include('visits.modal.edit')
    @include('visits.modal.show')
@endpush

@push('js')
    @include('visits._script')
@endpush
