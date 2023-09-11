@extends('administrator.theme')
@section('mhs')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white"><i data-feather="user" class="nav-icon icon-xs me2"></i>Data Admin
                            </h3>
                        </div>
                        <div class="mb-2 mb-lg-0">
                            <a href="{{ route('administrator.cr_admin') }}">
                                <h3 class="mb-0 btn btn-white"><i data-feather="plus"
                                        class="nav-icon icon-xs me2"></i>Tambah</h3>
                            </a>
                        </div>
                        {{-- <div>
                        <a href="#" class="btn btn-white">Create New Project</a>
                    </div> --}}
                    </div>
                </div>
            </div>
            <div class="card border-1 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('mahasiswa') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-outline mb-2">
                            <label class="form-label" for="nim">NIM</label>
                            <input name="nim" type="nim" id="nim" class="form-control" required>
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="name">NAMA</label>
                            <input name="name" type="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="email">EMAIL</label>
                            <input name="email" type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="jabatan">Jabatan</label>
                            <input name="jabatan" type="jabatan" id="jabatan" class="form-control" required>
                        </div>


                        <br>
                        <button type="submit" class="btn btn-success ">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning "><a href="{{ route('admin') }}"
                                class="text-white"> RESET </a></button>

                    </form>
                </div>
            </div>
        @endsection
