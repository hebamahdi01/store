@extends('layouts.admin')

@section('content')
    <form action="{{ url('/products/update/' . $product->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">اسم المنتج</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">كمية المنتج</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="quantity" value="{{ $product->quantity }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">سعر المنتج</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="price" value="{{ $product->price }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">صنف المنتج</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">وصف المنتج</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $product->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">حفظ</button>
    </form>
@endsection
