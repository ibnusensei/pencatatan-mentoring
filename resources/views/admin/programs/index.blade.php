@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Program</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Program</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Data Program</h1>
                <a name="" id="" class="btn btn-primary mb-3" href="{{ route('admin.program.create') }}"
                    role="button">ADD
                    Program</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Time Line</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($programs as $program)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $program->name }}</td>
                                <td>{{ date('d F Y', strtotime($program->start_date)) }} - {{ $program->getEndDate }}</td>

                                <td>
                                    <a name="" id="" class="btn btn-primary"
                                        href="{{ route('admin.program.edit', $program->id) }}" role="button">Edit</a>
                                    <a name="" id="" class="btn btn-danger"
                                        href="{{ route('admin.program.edit', $program->id) }}" role="button">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
