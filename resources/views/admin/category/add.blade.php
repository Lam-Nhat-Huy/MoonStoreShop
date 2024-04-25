@extends('admin.master')

@section('title', 'Dashboard Administrator')

@section('main-content')
    <div class="main-panel">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Category</h4>
                    <p class="card-description">
                        You can add a new category
                    </p>
                    <form class="forms-sample" method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name Category</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                                name="name"
                            >
                            @error('name')
                                <label id="firstname-error" class="error mt-2 text-danger"
                                    for="firstname">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Parent Category</label>
                            <select class="form-control" id="exampleSelectGender" name="parent_id">
                                <option value="">Parent Category</option>

                                @forelse ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value=""></option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Status</label>
                            <select class="form-control" id="exampleSelectGender" name="status">
                                <option value="1">Presently</option>
                                <option value="0">Hidden</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('category.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
