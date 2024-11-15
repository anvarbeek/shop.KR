@extends('dashboard.app')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-success">
                <h3 class="card-title mt-2 ">Category
                    <span class="right badge badge-danger">New</span>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name (UZB)*</label>
                            <input name="name_uz" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Name (RUS)*</label>
                            <input name="name_ru" type="text" class="form-control" required>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
