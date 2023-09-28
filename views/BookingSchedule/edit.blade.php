<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post"  action="{{route('BookingSchedule.update', $id)}} ">
    @method('PUT')
    @csrf
    @foreach($bookingschedules as $bookingschedule)
        <div class="row">
            <div class="form-group col-md-6">
                <label class="control-label">Start_time</label>
                <input class="form-control" type="text" name="start_time" value="{{$bookingschedule->start_time}}" >
            </div>


            <div class="form-group col-md-6">
                <label class="control-label">End_timee</label>
                <input class="form-control" type="text" name="end_time" value="{{$bookingschedule->end_time}}">
            </div>


            <div class="form-group col-md-6">
                <label class="control-label">Status</label>
                <input class="form-control" type="text" name="status" value="{{$bookingschedule->status}}">
            </div>


            <div class="form-group col-md-6">
                <label class="control-label">Employee_</label>
                <select  class="form-control"  name="employee_id">
                    @foreach($Employee  as $Employees )
                        <option value="{{$Employees->id}}"
                        @if($Employees->id == $bookingschedule->employee_id)
                            {{'selected'}}
                            @endif
                        >
                            {{$Employees -> name}}
                        </option>

                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label">Customer_</label>
                <select  class="form-control"  name="customer_id">
                    @foreach($Customer  as $Customers )
                        <option value="{{$Customers->id}}"
                        @if($Customers->id == $bookingschedule->customer_id)
                            {{'selected'}}
                            @endif
                        >
                            {{$Customers -> name}}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>

        <button class="btn btn-save">Update</button>
        <a class="btn btn-cancel" data-dismiss="modal" href="{{ route ('BookingSchedule.index') }}">Hủy bỏ</a>

        @endforeach
        </div>
</form>

</body>
</html>




