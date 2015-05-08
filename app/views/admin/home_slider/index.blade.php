@extends('layout.admin')
@section('content')
    @include('_partials.admin.slider.menu')
    <div class="centercontent">
        <div class="pageheader">
            <h1 class="pagetitle">Slider Home</h1>
            <ul class="hornav blogmenu">
                <li class="current">Sliders ({{$total}})</li>
            </ul>
        </div><!--pageheader-->
        <div id="contentwrapper" class="contentwrapper">

            <table class="table display">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Imagen</th>

                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="sliders_sortable">
                    @foreach($slider_pages as $slider_page)
                        <tr class="items ui-state-default" id="{{$slider_page->id}}">
                            <td><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></td>
                            <td>{{ $slider_page->title }}</td>


                            <td>{{ $slider_page->image }}</td>
                            <td>
                                {{ Form::open(array('method'=>'GET', 'route'=>array('admin_update_slider', $slider_page->id))) }}
                                    {{ Form::submit('Edit') }}
                                {{ Form::close() }}
                            </td>
                            <td>
                                {{ Form::open(array('route'=>array('delete_home_slider', $slider_page->id))) }}
                                    {{ Form::submit('Delete') }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!--contentwrapper-->
    </div><!--centercontent-->
    <script>
        $(document).ready(function(){
            $('#sliders_sortable').sortable({
                stop: function(event, ui){
                    var new_positions = [];
                    $.map($(this).find('.items'), function(el) {
                        var id = $(el).attr('id');
                        new_positions.push({id: id, position:$(el).index() + 1 }) ;
                    });
                    $.ajax({
                        url : base_url + '/home-slider/update_position',
                        data: {new_positions:new_positions},
                        method: 'POST',
                        success: function(response){

                        }
                    });
                }
            });
        });
    </script>
@stop