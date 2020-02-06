@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">@if(isset($quantrivien)) Cập nhật @else Thêm @endif Quản Trị Viên</h4>

                @if(isset($quantrivien))
                <form action="{{ route('quan-tri-vien.xu-ly-cap-nhat', ['id' => $quantrivien->id]) }}" method="POST">
                @else

                <form action="{{ route('quan-tri-vien.xu-ly-them-moi') }}" method="POST">
                @endif
                    @csrf
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" @if(isset($quantrivien)) value="{{ $quantrivien->ten_dang_nhap }}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="mat_khau">Mật khẩu</label>
                        <input type="text" class="form-control" id="mat_khau" name="mat_khau" @if(isset($quantrivien)) value="{{ $quantrivien->mat_khau }}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="ho_ten">Họ tên</label>
                        <input type="text" class="form-control" id="ho_ten" name="ho_ten" @if(isset($quantrivien)) value="{{ $quantrivien->ho_ten }}" @endif>
                    </div>

                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($quantrivien)) Cập nhật @else Thêm @endif</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection