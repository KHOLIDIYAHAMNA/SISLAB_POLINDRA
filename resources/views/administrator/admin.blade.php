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
                            <h3 class="mb-0  text-white"><i data-feather="user" class="nav-icon icon-xs me2"></i>Data Admin
                            </h3>
                        </div>
                        <div class="mb-2 mb-lg-0">
                            <a href="{{ route('create_admin') }}">
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

            <!-- row  -->
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">

                        <!-- table  -->
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Posisi</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $data)
                                        <tr>
                                            <td>{{ $data->id_admin }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->username }}</td>
                                            <td>{{ $data->posisi }}</td>
                                            <td>{{ $data->level }}</td>

                                            <td class=" align-middle text-dark">
                                                <div class="avatar-group">
                                                    <span class="avatar-sm avatar-primary">
                                                        <a class="btn btn-info btn-ivcon rounded-circle indicator-primary text-dark"
                                                            href="#" role="button">
                                                            <i class="icon-xs" data-feather="edit"></i>
                                                        </a>
                                                        <form method="post"
                                                            action="{{ route('administrator_delete_admin', ['id=>$admins->id']) }}"
                                                            class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button
                                                                class="btn btn-danger btn-ivcon rounded-circle indicator-primary text-dark"
                                                                onclick="return confirm('yakin delete?')">
                                                                <i class="icon-xs" data-feather="trash"></i></button>
                                                            
                                                        </form>
                                                    </span>
                                                </div>
                                                {{-- @csrf
                                                    @method('DELETE')
                                       
                                            </td>
                                        </tr>
                                        {{-- @empty
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div> --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- card footer  -->

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
