<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit</title>
    </head>
    <body align="center">
    <h1>ADD DATA <a href="{{url('showdata')}}">HOME</a></h1><br>
        <form action="{{url('update')}}/{{$data->id}}">{{-- ส่งแบบ getให้เอา id ไปด้วย $data->id}}
        {{-- <form action="{{url('update')}}/{{$data->id}}" method="post"> --}}{{-- ส่งแบบpostให้ไปที่เร้า update --}}
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
                <label for="" class="col-sm-5">ชื่อ : </label>
            <input type="text" name="name" style="margin-top: 1em" value="{{$data->name}}"><br>
            </div>
            <label for="">นามสกุล : </label>
            <input type="text" name="lastname" style="margin-top: 1em" value="{{$data->lastname}}"><br>
            <label for="">อายุ : </label>
            <input type="number" name="age" style="margin-top: 1em" value="{{$data->age}}"><br>
            <button type="submit" style="margin-top: 1em">แก้ไขข้อมูล</button>
        </form>
    </body>
</html>