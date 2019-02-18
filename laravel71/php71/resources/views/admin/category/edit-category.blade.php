@extends('admin.master')
@section('body')

    <br/>
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Update Category Form</h4>

                </div>
                <div class="panel-body">

                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <form action="{{route('update-category')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}">
                                <input type="hidden" class="form-control" name="category_id" value="{{$category->id}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="category_description">{{$category->category_description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio"  name="publication_status" {{ $category->publication_status == 1 ? 'checked' : '' }} value="1">Published
                                <input type="radio"  name="publication_status" {{ $category->publication_status == 0 ? 'checked' : '' }} value="0">Unpublished
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Update Category Info</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection