@extends('layouts.admin')
@section('title')
    <h2 class="h2"> New Product</h2>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{route('pc.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('layouts.flash-messages')
                <div class="form-row">
                    <div class="form-group col-4">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="product_name" value="{{old('product_name')}}"/>
                        @if($errors->has('product_name'))
                            <span class="text-danger">{{$errors->first('product_name')}}</span>
                        @endif
                    </div>
                    <div class="form-group col-4">
                        <label>Product Categories (Multiple Allowed)</label>
                        <select class="form-control" name="product_categories[]" multiple>
                            @foreach($category as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('product_categories'))
                            <span class="text-danger">{{$errors->first('product_categories')}}</span>
                        @endif
                    </div>
                    <div class="form-group col-4">
                        <label>Upload Images</label>
                        <input name="product_image_file[]" type="file" class="form-control-file"  data-show-upload="false" data-show-caption="true" multiple >
                        @if($errors->has('product_image_file'))
                            <span class="text-danger">{{$errors->first('product_image_file')}}</span>
                        @endif
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-4">
                        <label>Unit Price</label>
                        <input name="product_unit_price" type="text" class="form-control" value="{{old('product_unit_price')}}">
                        @if($errors->has('product_unit_price'))
                            <span class="text-danger">{{$errors->first('product_unit_price')}}</span>
                        @endif
                    </div>
                    <div class="form-group col-4">
                        <label>Qty</label>
                        <input name="product_qty" type="text" class="form-control" value="{{old('product_qty')}}">
                        @if($errors->has('product_qty'))
                            <span class="text-danger">{{$errors->first('product_qty')}}</span>
                        @endif
                    </div>

                    <div class="form-group col-4">
                        <label>Discount</label>
                        <input name="product_discount" type="text" class="form-control" value="{{old('product_discount')}}">
                        @if($errors->has('product_discount'))
                            <span class="text-danger">{{$errors->first('product_discount')}}</span>
                        @endif
                    </div>
                </div>





                <input type="submit" class="btn btn-primary" value="Create"/>


            </form>
        </div>
    </div>

@endsection

