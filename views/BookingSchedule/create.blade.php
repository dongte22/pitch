<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh Toán</title>
</head>
<body>
<form class="row"  method="post"  action="{{ route('BookingSchedule.store') }}" >
    @csrf
    <div class="form-group col-md-4">
        <label class="control-label">start_time</label>
        <input class="form-control" type="text" name="start_time">
    </div>
    <div class="form-group col-md-4">
        <label class="control-label">End_time</label>
        <input class="form-control" type="text" name="end_time">
    </div>
    <div class="form-group col-md-4">
        <label class="control-label">Status</label>
        <input class="form-control" type="datetime" name="status" >
    </div>

    <div class="form-group col-md-4">
        <label class="control-label">Employee </label>
        <select  class="form-control"  name="employee_id">
            @foreach($Employee  as $Employees )
                <option value="{{$Employees->id}}">
                    {{$Employees -> name}}
                </option>

            @endforeach
        </select>

    </div>

    <div class="form-group col-md-4">
        <label class="control-label">Customer </label>
        <select  class="form-control"  name="customer_id">
            @foreach($Customer  as $Customers )
                <option value="{{$Customers->id}}">
                    {{$Customers -> name}}
                </option>

            @endforeach
        </select>

    </div>



    </div>
    <button class="btn btn-save" >Lưu lại</button>
    <a class="btn btn-cancel" href="{{ route ('BookingSchedule.index') }}">Hủy bỏ</a>
    </div>



</form>

</body>
</html>
