@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    {{Form::open(array('route' => 'items.store', 'method' => 'post'))}}
                    <div class="form-group row">
                        {{Form::label('title', 'Title : ', array('class' => 'col-md-4 col-form-label text-md-right'))}}
                        <div class="col-md-6">
                            {!! Form::text('title' ,"",[ 'class'=>"form-control"])
                            !!}
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        {{Form::label('body', "What's in your mind: ", array('class' => 'col-md-4 col-form-label text-md-right'))}}
                        <div class="col-md-6">
                            {!! Form::text('body' ,"",[ 'class'=>"form-control"])
                            !!}
                            @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        {{Form::label('date', "Date: ", array('class' => 'col-md-4 col-form-label text-md-right'))}}
                        <div class="col-md-6">
                            {{Form::date("date", \Carbon\Carbon::now(), ['class'=>'form-control'])}}
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        {{Form::label('image', "Image: ", array('class' => 'col-md-4 col-form-label text-md-right'))}}
                        <div class="col-md-6">
                            {!! Form::text('image' , 'image.jpg')
                            !!}
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            {{Form::submit('Save !' , ['class'=>"btn btn-warning"])}}
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection