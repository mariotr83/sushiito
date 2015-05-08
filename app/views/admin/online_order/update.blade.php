@extends('layout.admin')
@section('content')
    {{--@include('_partials.admin.orders.menu')--}}
    <div class="centercontent">
        <div class="pageheader notab">
            <h1 class="pagetitle">Editar Link pedido en linea</h1>
        </div><!--pageheader-->
        <div class="contentwrapper">
            <div class="two_third">
                {{ Form::model($link,array('enctype'=>'multipart/form-data')) }}

                    <div class="form-group">
                        {{ Form::text('url', null, array('class'=>'form-control', 'placeholder'=>'Url')) }}
                        <div class="text-warning">{{ $errors->first('url') }}</div>
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