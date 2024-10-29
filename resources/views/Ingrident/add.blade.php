@extends('main')

@section('title', 'Ingrident')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create</h1>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6 mt-2">
                        <a href="/ing" class="btn btn-primary">Ingridents</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <form action="/ing" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    @error('name')
                                        <spam class="text-danger">
                                            {{ $message }}
                                        </spam>
                                    @enderror
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter name"><br>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
