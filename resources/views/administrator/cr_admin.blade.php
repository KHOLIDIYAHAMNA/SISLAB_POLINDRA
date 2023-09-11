@extends('administrator.theme')
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white"><i data-feather="user" class="nav-icon icon-xs me2"></i>Form Data
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-1 shadow-sm rounded  mt-4">

                <div class="col-md-12 col-12">
                    <div class="card-body">
                        <form action="{{ route('admin_proses') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-outline mb-2">
                                <label class="form-label" for="id_admin">ID</label>
                                <input name="id_admin" type="id_admin" id="id_admin" class="form-control" required>
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
                                <label class="form-label" for="username">USERNAME</label>
                                <input name="username" type="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-outline mb-2">
                                <label class="form-label" for="jabatan">PASSWORD</label>
                                <input name="jabatan" type="jabatan" id="jabatan" class="form-control" required>
                            </div>
                            <div class="form-outline mb-2">
                                <label class="form-label" for="posisi">POSISI</label>
                                <input name="posisi" type="posisi" id="posisi" class="form-control" required>
                            </div>
                            <div class="form-outline mb-2">
                                <label class="form-label" for="level">LEVEL</label>
                                <input name="level" type="level" id="level" class="form-control" required>
                            </div>


                            <br>
                            <button type="submit" class="btn btn-success ">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning "><a href="{{ route('admin') }}"
                                    class="text-white"> RESET </a></button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
