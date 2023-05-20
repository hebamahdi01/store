@extends('layouts.admin')

@section('content')
    <div class="mt-3">


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">quantity</th>
                    <th scope="col">price</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ url('/products/create') }}" class="btn btn-primary">اضافة منتج جديد</a>
                @foreach ($products as $index => $product)
                    <tr>
                        <th scope="row">{{ ++$index }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ url('/products/edit/' . $product->id) }}" class="btn btn-info">تعديل</a>
                            <a href="{{ url('/products/destroy/' . $product->id) }}" class="btn btn-danger">حذف</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
