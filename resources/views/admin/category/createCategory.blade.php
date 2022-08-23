@extends('admin.master')
@section('title')
Create Category
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Create Category
                </div>
                <div class="card-body">

                    <h3>{{ Session::get('message') }}</h3>

                  {!! Form::open(['method' => 'POST', 'url' => 'category/save', 'class' => 'form-horizontal']) !!}

                  <div class="form-group">
                    <label for="categoryName">Name</label>
                    <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Electronics">
                </div>
                <div class="form-group">
                    <label for="categoryDesc">Description</label>
                    <input type="text" class="form-control" id="categoryDesc" name="categoryDesc" placeholder="This is a new product...">
                </div>
                <div class="form-row">
                 <div class="form-group col-12">
                    <label for="inputState">Public Status</label>
                    <select id="inputState" class="form-control" name="publicStatus">
                        <option selected>Choose...</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
            </div>

            <button type="submit" name="btn" class="btn btn-primary">Save Category Info</button>

            {!! Form::close() !!}

        </div>
    </div>
</div>
</div>
</div>


@endsection
