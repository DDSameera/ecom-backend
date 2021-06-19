@extends('layouts.admin')
@section('title')
    <h1 class="h1">Create Category</h1>
@endsection
@section('content')

    @include('category.index')
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('layouts.flash-messages')

        <div class="form-row">
            <div class="form-group col-4">
                <label>Category Name</label>
                <input type="text" class="form-control" name="cat_name"/>
                @if($errors->has('cat_name'))
                    <span class="text-danger">{{$errors->first('cat_name')}}</span>
                @endif
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-4">
                <label>Sub Categories</label>
                <select name="sub_category" class="form-control">
                    <option value="">-Select-</option>
                    @foreach($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <input type="submit" class="btn btn-primary" value="Save"/>
    </form>
@endsection

