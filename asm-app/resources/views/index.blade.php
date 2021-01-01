@extends('layout.master')


@section('title', 'Index')


@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 8 CRUD </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Student ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>Date Created</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{++$i}}</td>
            <td>{{ $student->stu_id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->department }}</td>
            <td>{{ date_format($student->created_at, 'jS M Y') }}</td>
            <td>
                <form action="{{ route('students.destroy', $student->stu_id) }}" method="POST">

                    <a href="{{ route('students.show', $student->stu_id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>

                    <a href="{{ route('students.edit', $student->stu_id) }}">
                        <i class="fas fa-edit  fa-lg"></i>

                    </a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>

                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $students->links() !!}

@endsection
