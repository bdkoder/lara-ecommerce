@extends('admin.master')
@section('title')
Manage Category
@endsection

@section('content')


<ul>
    @foreach ( $categories as $category )
        <li>{{ $category->category_name }}</li>
    @endforeach
</ul>




@endsection
