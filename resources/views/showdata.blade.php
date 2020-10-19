<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       {{--  <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <title>Laravel</title>
    </head>
    <body align="center">
        <h1>ShowData</h1>
        <a href="{{url('add')}}">insert +</a><br><br>
        <table class="table table-hover" border="1" align="center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>LASTNAME</th>
                    <th>AGE</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            @if(count($sql)>0)
            <tbody align="center">
                @foreach($sql as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->lastname}}</td>
                    <td>{{$data->age}}</td>
                    <td><a href="edit/{{$data->id}}">แก้ไข</a>{{-- ส่งแบบ get --}}
                        {{-- <form action="{{url('chang')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <button type="submit">แก้ไข</button>
                          </form> --}}{{-- ส่งแบบ post --}}
                    </td>
                    <td><a href="delete/{{$data->id}}">ลบ</a></td>{{-- ส่งแบบ get --}}
                </tr>
                @endforeach
            </tbody>
            @endif
        </table>
    </body>
</html>