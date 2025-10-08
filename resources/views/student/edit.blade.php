<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Update Student</h2>

    <form action="{{ route('student.update', $stu->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col">
                <label >First Name</label>
                <input type="text" name="firstname" class="form-control" value="{{ $stu->first_name }}" required>
            </div>
            <div class="col">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" value="{{ $stu->last_name }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male" @if ($stu->gender == 'Male') checked @endif> Male
            <input type="radio" name="gender" value="Female" @if ($stu->gender == 'Female') checked @endif> Female
        </div>

        <div class="mb-3">
            <label>Grade:</label><br>
            <select name="grade" id="grade" style="width: 50px; border-radius: 5px; padding: 0px 10px 0px 0px;">
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            
        </div>

@php $subjects = explode(',',$stu['subjects']); @endphp
        <div class="mb-3">
            <label>Subjects:</label><br>
            <input type="checkbox" name="subjects[]" value="Maths" @if(in_array('Maths',$stu->subjects)) checked @endif> Maths
            <input type="checkbox" name="subjects[]" value="Science" @if(in_array('Science',$stu->subjects)) checked @endif> Science
            <input type="checkbox" name="subjects[]" value="English" @if(in_array('English',$stu->subjects)) checked @endif> English
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control">{{ $stu->address }}</textarea>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $stu->phone }}">
        </div>

        <div class="mb-3">
            <label>NIC</label>
            <input type="text" name="nic" class="form-control" value="{{$stu->nic}}">
        </div>

        <button type="submit" class="btn btn-danger">Update</button>
        <a href="{{ route('student.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

</body>
</html>
