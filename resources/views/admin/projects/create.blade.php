@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h2 class="text-center">Add a New Project</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="p-4">
                        <div class="mb-3">
                            <label for="img" class="form-label">Image</label>
                            <input class="form-control @error('img') is invalid @enderror" type="file" name="img" id="img" value="{{ old('img') }}" accept="image/*">
                            @error('img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Project name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Project name..." value="{{ old('name') }}" >
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Description..." >{{ old('description') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="repository_link" class="form-label">Repository link</label>
                            <input type="text" name="repository_link" class="form-control" id="repository_link" placeholder="Repository link..." value="{{ old('repository_link') }}" >
                            @error('repository_link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date_start" class="form-label">Start date</label>
                            <input class="form-control" type="date" name="date_start" id="date_start" value="{{ old('date_start') }}" >
                            @error('date_start')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date_end" class="form-label">End date</label>
                            <input class="form-control" type="date" name="date_end" id="date_end" value="{{ old('date_end') }}" >
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Aggiungi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
