@extends('layout.admin')
@section('content')
    @include('_partials.admin.menu.menu')
    <div class="centercontent">
        <div class="pageheader notab">
            <h1 class="pagetitle">Update slider</h1>
        </div><!--pageheader-->
        <div class="contentwrapper">
            <div class="two_third">
                {{ Form::model($menu,array('enctype'=>'multipart/form-data')) }}

                    <div class="form-group">
                        {{ Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Nombre')) }}
                        <div class="text-warning">{{ $errors->first('title') }}</div>
                    </div>



                    <div class="form-group">
                        {{ Form::label('image', 'Image (1349 x 665):', array()) }}
                        {{ Form::file('image', array()) }}
                        <div class="text-warning">{{ $errors->first('image') }}</div>
                    </div>

                    <div class="form-group">
                        <img src="{{ asset('img/sliderImages/'.$menu->image) }}" alt="Slider Image" style="width: 60%"/>
                    </div>

                    <div class="form-group">
                        {{ Form::submit('Submit') }}
                    </div>

                {{ Form::close() }}
            </div><!--two_third-->
        </div><!--contentwrapper-->
    </div><!--centercontent-->
@stop
@section('scripts')

@stop