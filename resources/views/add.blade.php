<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add</title>
    </head>
    <body align="center">
    <h1>ADD DATA <a href="{{url('showdata')}}">HOME</a></h1><br>
        <form action="{{url('insert')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="" class="col-sm-5">ชื่อ : </label>
                <input type="text" name="name" style="margin-top: 1em" required><br>
            </div>
                <div class="form-group">
                <label for="">นามสกุล : </label>
                <input type="text" name="lastname" style="margin-top: 1em" required><br>
            </div>
            <div class="form-group">
            <label for="">อายุ : </label>
                <input type="number" name="age" style="margin-top: 1em" required><br>
            </div>
            <button type="submit" style="margin-top: 1em">บันทึกข้อมูล</button>
        </form>
    </body>
</html>