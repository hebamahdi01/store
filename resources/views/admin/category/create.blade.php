@extends('layouts.admin')

@section('content')
    <form action="{{ url('/category/store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name">
        </div>
        
        <button type="submit" class="btn btn-primary">حفظ</button>
    </form>
@endsection
