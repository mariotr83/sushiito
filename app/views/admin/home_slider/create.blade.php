@extends('layout.admin')
@section('content')
    @include('_partials.admin.slider.menu')
    <div class="centercontent">
        <div class="pageheader notab">
            <h1 class="pagetitle">Add new slider</h1>
        </div><!--pageheader-->
        <div class="contentwrapper">
            <div class="two_third">
                {{ Form::open(array('enctype'=>'multipart/form-data', 'route'=>'admin_create_slider')) }}
                    <div class="form-group">
                        {{ Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Nombre')) }}
                        <div class="text-warning">{{ $errors->first('title') }}</div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('image', 'Image (1920 x 1080):', array()) }}
                        {{ Form::file('image', array()) }}
                        <div class="text-warning">{{ $errors->first('image') }}</div>
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Submit') }}
                        <input type="reset" name="reset" value="Reset" />
                    </div>

                {{ Form::close() }}
            </div><!--two_third-->
        </div><!--contentwrapper-->
    </div><!--centercontent-->
@stop
@section('scripts')

@stop