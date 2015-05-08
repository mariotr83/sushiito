@extends('layout.admin')
@section('content')
    @include('_partials.admin.menu.menu')
    <div class="centercontent">
        <div class="pageheader notab">
            <h1 class="pagetitle">Agregar archivo pdf Menú</h1>
        </div><!--pageheader-->
        <div class="contentwrapper">
            <div class="two_third">
                {{ Form::open(array('enctype'=>'multipart/form-data', 'route'=>'admin_create_pdf_menu')) }}
                    <div class="form-group">
                        {{ Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Nombre')) }}
                        <div class="text-warning">{{ $errors->first('title') }}</div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('file', 'pdf file:', array()) }}
                        {{ Form::file('file', array()) }}
                        <div class="text-warning">{{ $errors->first('file') }}</div>
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