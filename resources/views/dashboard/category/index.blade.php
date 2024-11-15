@extends('dashboard.app')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('category.create') }}" class="btn btn-success float-right">Add new</a>
                <h3 class="card-title mt-2 ">All Category</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name (UZB)</th>
                            <th>Name (RUS)</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name_uz }}</td>
                                <td>{{ $category->name_ru }}</td>
                                <td>{{ $category->status }}</td>
                                <td>
                                    <div class="btn-group float-right">
                                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-primary mr-4">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('category.destroy',$category->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('O`chirishni tasdiqlaysizmi !!!')" type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
