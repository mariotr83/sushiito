@extends('layout.admin')
@section('content')
    {{--@include('_partials.admin.orders.menu')--}}
    <div class="centercontent">
        <div class="pageheader">
            <h1 class="pagetitle">Pedidos en linea link</h1>

        </div><!--pageheader-->
        <div id="contentwrapper" class="contentwrapper">

            <table class="table display">
                <thead>
                    <tr>
                        <th></th>
                        <th>Url</th>

                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="sliders_sortable">
                    @foreach($link_pages as $link_page)
                        <tr class="items ui-state-default" id="{{$link_page->id}}">
                            <td><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></td>
                            <td>{{ $link_page->url }}</td>

                            <td>
                                {{ Form::open(array('method'=>'GET', 'route'=>array('admin_update_link', $link_page->id))) }}
                                    {{ Form::submit('Editar') }}
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