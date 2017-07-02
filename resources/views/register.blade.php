@extends('layouts.fullpage')
<?php $title = 'Register New Customer' ?>

@section('header',$title)

@section('wrap')
    @parent
@section('content')
    <div class="row">
        <form method="post">
            {{csrf_field()}}
            <div class="col l3 m3 s12">
                <input type="text" class="@if(isset($req['name']) && $req['name'] == 'empty' )  invalid   @endif" name="name" placeholder="Enter Customer Name" value="{{ isset($req['name']) && $req['name'] != 'empty' ? $req['name'] :'' }}" >
            </div>
            <div class="col l3 m3 s12">
                <input type="text" class="@if(isset($req['age']) && $req['age'] == 'empty' )  invalid   @endif" name="age" placeholder="Enter Customer Age"  value="{{ isset($req['age']) && $req['age'] != 'empty' ? $req['age'] :'' }}">
            </div>
            <div class="col l3 m3 s12">
                <input type="text" class="@if(isset($req['mobile']) && $req['mobile'] == 'empty' )  invalid   @endif" name="mobile" placeholder="Enter Customer Mobile Number" value="{{ isset($req['mobile']) && $req['mobile'] != 'empty' ? $req['mobile'] :'' }}">
            </div>
            <div class="col l3 m3 s12">
                <input type="email" class="@if(isset($req['email']) && $req['email'] == 'empty' )  invalid   @endif" name="email" placeholder="Enter Customer Email" value="{{ isset($req['email']) && $req['email'] != 'empty' ? $req['email'] :'' }}">
            </div>
    </div>

    <div class="row">
        <div class="col l3 m3 s12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
    </form>
    <div class="row">
        <div  style="padding: 20px 15px;color:#fff;" class="col l6 offset-l3 m6 offset-m3 s12 {{ isset($alert['color']) ? $alert['color'] :'' }} center-align  {{ isset($alert['display']) ? $alert['display'] :'hide' }}">
         <span>  {{ isset($alert['comment']) ? $alert['comment'] :'' }}</span>
        </div>
    </div>
    <br><h4>Reporting</h4><hr>
    @if(isset($report))


            <table class="striped">
                <tr>
                    <th>Id</th><th>Name</th><th>Age</th><th>Mobile</th><th>Email</th><th></th>
                </tr>
                @foreach($report as $row)
                <tr id="id-{{$row['id']}}">
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['name'] }}</td>
                    <td>{{ $row['age'] }}</td>
                    <td>{{ $row['mobile'] }}</td>
                    <td>{{ $row['email'] }}</td>
                    <td><button class="waves-effect waves-light btn Del-btn" data-id="{{ $row['id'] }}">Delete</button> </td>
                    {{--<td>--}}
                        {{--{{ Form::open(['method' => 'DELETE', 'route' => 'register.destroy', $row->id]) }}--}}
                        {{--{{ Form::hidden('id', $row->id) }}--}}
                        {{--{{ Form::submit('Delete', ['class' => 'waves-effect waves-light btn']) }}--}}
                        {{--{{ Form::close() }}--}}
                    {{--</td>--}}
                </tr>

                @endforeach
            </table>
    @else
        {{ 'is Not Data' }}
    @endif
    <script>
        $(document).ready(function (){
            $.ajaxSetup({ cache: false });
            jQuery.support.cors = true;
            $('.Del-btn').click(function () {
                var testid = $(this).data('id');
                var customer_Id = { "customerid": testid,'_token': '{{ csrf_token()}}' };
                $.ajax({
                    type: "POST",
                    url: "{{ url('/') }}/delete",
                    data: customer_Id,
                    dataType: 'html',
                    crossDomain: true,
                    success: function (result) {
                          $('#id-'+result).fadeOut(1000);
                    },
                    error: function (xhr, status, error) {
                        alert('error');
                        console.log(status + ': ' + error);
                    }
                });
            });

        });
    </script>
@stop
@stop

