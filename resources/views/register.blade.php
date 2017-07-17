@extends('layouts.fullpage')
<?php $title = 'Register New Customer'?>
{{ Session::get('comment') }}

@section('header',$title)

@section('wrap')
    @parent
@section('content')
        <form method="post" action="" >
            <div class="row">
            {{csrf_field()}}
            <div class="col l3 m3 s12">
                <input id="name" type="text" class="@if(isset($req['name']) && $req['name'] == '' )  invalid   @endif" name="name" placeholder="Enter Customer Name" value="">
            </div>
            <div class="col l3 m3 s12">
                <input id="age" type="text" class="@if(isset($req['age']) && $req['age'] == '' )  invalid   @endif" name="age" placeholder="Enter Customer Age" value="">
            </div>
            <div class="col l3 m3 s12">
                <input id="mobile" type="text" class="@if(isset($req['mobile']) && $req['mobile'] == '' )  invalid   @endif" name="mobile" placeholder="Enter Customer Mobile Number"
                       value="">
            </div>
            <div class="col l3 m3 s12">
                <input id="email" type="email" class="@if(isset($req['email']) && $req['email'] == '' )  invalid   @endif" name="email" placeholder="Enter Customer Email"
                       value="">
            </div>
    </div>

    <div class="row">
        <div class="col l3 m3 s12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
        <div id="edit" class="col l3 m3 s12" style="opacity: 0">
            <button class="btn waves-effect waves-light blue" type="button" name="action">Edit
                <i class="material-icons right">mode_edit</i>
            </button>
        </div>
    </div>
    </form>
    <div class="row">
        <div style="padding: 20px 15px;color:#fff;" class="col l6 offset-l3 m6 offset-m3 s12 {{ isset($alert['color']) ? $alert['color'] :'' }} center-align  {{ isset($alert['display']) ? $alert['display'] :'hide' }}">
            <span>  {{ isset($alert['comment']) ? $alert['comment'] :'' }}</span>
        </div>
    </div>
    <br><h4>Reporting</h4>
    <hr>
    @if(isset($report))


        <table id="customer_table" class="striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Mobile</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($report as $row)
                <tr id="id-{{$row['id']}}">
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['name'] }}</td>
                    <td>{{ $row['age'] }}</td>
                    <td>{{ $row['mobile'] }}</td>
                    <td>{{ $row['email'] }}</td>
                    <td>
                        <button class="waves-effect waves-light btn Del-btn grey darken-2" data-id="{{ $row['id'] }}"><i class="material-icons right">delete</i></button>
                    </td>
                    <td>
                        <button class="waves-effect waves-light btn Edit-btn grey darken-2" data-id="{{ $row['id'] }}"><i class="material-icons right">mode_edit</i></button>
                    </td>
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
        var CustomerId;
        $(document).ready(function () {
            $.ajaxSetup({cache: false});
            jQuery.support.cors = true;


            $('.Del-btn').click(function () {
                CustomerId = $(this).data('id');
                var customer_Id = {"customerid": CustomerId, '_token': '{{ csrf_token()}}'};
                $.ajax({
                    type: "POST",
                    url: "{{ url('/') }}/delete",
                    data: customer_Id,
                    dataType: 'html',
                    crossDomain: true,
                    success: function (result) {
                        $('#id-' + result).fadeOut(1000);
                    },
                    error: function (xhr, status, error) {
                        alert('error');
                        console.log(status + ': ' + error);
                    }
                });
            });


            $('#edit').click(function () {
                $name = $('#name').val();
                $age = $('#age').val();
                $mobile = $('#mobile').val();
                $email = $('#email').val();
                var data_Edit = {'customerid': CustomerId, 'name': $name, 'age': $age, 'mobile': $mobile, 'email': $email, '_token': '{{ csrf_token()}}'};
                $.ajax({
                    type: "POST",
                    url: "{{ url('/') }}/edit",
                    data: data_Edit,
                    dataType: 'html',
                    crossDomain: true,
                    success: function (result) {
                    },
                    error: function (xhr, status, error) {
//                        alert('error');
                        console.log(status + ': ' + error);
                    }
                });
            });


            $('.Edit-btn').click(function () {
                CustomerId = $(this).data('id');
                var tr = document.getElementById('id-'+CustomerId);
                var td = tr.getElementsByTagName("td");

                $('#edit').animate({'opacity': 1}, 1000);
                $name = td[1].innerHTML;
                $age = td[2].innerHTML;
                $mobile = td[3].innerHTML;
                $email = td[4].innerHTML;
                $('#name').val($name);
                $('#age').val($age);
                $('#mobile').val($mobile);
                $('#email').val($email);


            });


        });
    </script>
@stop
@stop

