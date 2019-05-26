@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('ajax_check_xml') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>
                            World XML File
                            <input type="file" required name="world" class="form-control-file">
                        </label>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-info" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection