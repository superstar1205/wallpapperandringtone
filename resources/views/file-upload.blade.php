@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3 pt-5">

                <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-5">Upload File</h3>
                    @csrf
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="custom-file mb-3">
                        <input type="file" name="file" class="custom-file-input" id="chooseFile">
                        <label class="custom-file-label" for="chooseFile">Select file</label>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" value="wallpapper" name="filetype" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1">Wallpapper</label>
                        </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" value="ringtone" name="filetype" id="flexRadioDefault2" checked/>
                        <label class="form-check-label" for="flexRadioDefault2">Ringtone</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                        Upload Files
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
