@extends('master')

@section('main-content')

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Manage Home Scroller</h3>
        <a href="{{ URL::to('/') }}/a-index" class="btn btn-outline-secondary btn-sm">Back to Admin</a>
    </div>

    {{-- Flash messages --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="row">
        <div class="col-lg-5 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <strong>Upload New Image</strong>
                </div>
                <div class="card-body">
                    <form action="{{ URL::to('/') }}/add_image" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="img">Select image</label>
                            <input type="file" class="form-control-file" id="img" name="img" accept="image/*" required>
                            <small class="form-text text-muted">Allowed types: jpeg, jpg, png, gif. Max 2MB.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <strong>Current Scroller Images</strong>
                    <span class="badge badge-light">{{ isset($images) ? count($images) : 0 }}</span>
                </div>
                <div class="card-body">
                    @if(isset($images) && count($images))
                        <div class="row">
                            @foreach($images as $img)
                                <div class="col-sm-6 col-md-4 mb-3">
                                    <div class="card h-100">
                                        <img src="{{ URL::to('/') }}/{{ $img->scroller_image }}" class="card-img-top" alt="scroller image" style="object-fit:cover;height:140px">
                                        <div class="card-body p-2 text-center">
                                            <a href="{{ URL::to('/') }}/remove-scroller/{{ $img->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Remove this image?')">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="alert alert-info mb-0">No scroller images uploaded yet.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection