@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">@if(isset($cauHinhHelp)) Cập nhật @else Thêm @endif Cấu hình trợ giúp</h4>

                @if(isset($cauHinhHelp))
                <form action="{{ route('cau-hinh-tro-giup.xu-ly-cap-nhat', ['id' => $cauHinhHelp->id]) }}" method="POST">
                @else

                <form action="{{ route('cau-hinh-tro-giup.xu-ly-them-moi') }}" method="POST">
                @endif
                	@csrf
                    <div class="form-group">
                        <label for="loai_tro_giup">Loại trợ giúp</label>
                        <input type="text" class="form-control" id="loai_tro_giup" name="loai_tro_giup" @if(isset($cauHinhHelp)) value="{{ $cauHinhHelp->loai_tro_giup }}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="thu_tu">Thứ tự</label>
                        <input type="text" class="form-control" id="thu_tu" name="thu_tu" @if(isset($cauHinhHelp)) value="{{ $cauHinhHelp->thu_tu }}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="credit">Credit</label>
                        <input type="text" class="form-control" id="credit" name="credit" @if(isset($cauHinhHelp)) value="{{ $cauHinhHelp->credit }}" @endif>
                    </div>

                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($cauHinhHelp)) Cập nhật @else Thêm @endif</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection