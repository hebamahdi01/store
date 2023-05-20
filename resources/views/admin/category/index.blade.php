@extends('layouts.admin')

@section('content')
    <div class="mt-3">
        
        <a href="{{ url('/category/create') }}" class="btn btn-primary">اضافة صنف جديد</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $index => $category)
                    <tr>
                        <th scope="row">{{ ++$index }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url('category/edit/' . $category->id) }}" class="btn btn-info">تعديل</a>
                            <a href="{{ url('category/destroy/' . $category->id) }}" class="btn btn-danger">حذف</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $categories->links() }}
    </div>
@endsection
