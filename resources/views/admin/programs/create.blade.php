@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Program</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Program</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">ADD Data Program</h1>
                <a name="" id="" class="btn btn-warning mb-3" href="{{ route('admin.program.index') }}"
                    role="button">Back To Data
                    Program
                </a>

                <form action="{{ route('admin.program.store') }}" method="post">
                    @csrf
                    <div class="from-group">
                        <label for="" class="mb-2">Name Program</label>
                        <input type="text" class="form-control" name="name" id="" required
                            aria-describedby="helpId" placeholder="Name Program">
                        {{-- if error validate --}}
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="from-group">
                                <label for="" class="mb-2 mt-2">Start Date</label>
                                <input type="date" name="start_date" class="form-control" placeholder="Start Date"
                                    required>
                                {{-- if error validate --}}
                                @error('start_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="from-group">
                                <label for="" class="mb-2 mt-2">End Date</label>
                                <input type="date" name="end_date" class="form-control" placeholder="End Date" required>
                                {{-- if error validate --}}
                                @error('end_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-2 mt-2">Description</label>
                        <textarea name="description" class="form-control" id="" cols="20" rows="10"></textarea>
                        {{-- if error validate --}}
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save</button>
                </form>
            </div>
        </div>
    </section>
@endsection
