<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Add New Student</h2>

    <form action="{{ route('student.store') }}" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="col">
                <label >First Name</label>
                <input type="text" name="firstname" class="form-control" required>
            </div>
            <div class="col">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
        </div>

        <div class="mb-3">
            <label>Grade:</label><br>
            <select name="grade" id="grade" style="width: 50px; border-radius: 5px; padding: 0px 10px 0px 0px;">
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            {{-- <input type="radio" name="grade" value="A"> A
            <input type="radio" name="grade" value="B"> B
            <input type="radio" name="grade" value="C"> C --}}
        </div>

        <div class="mb-3">
            <label>Subjects:</label><br>
            <input type="checkbox" name="subjects[]" value="Maths"> Maths
            <input type="checkbox" name="subjects[]" value="Science"> Science
            <input type="checkbox" name="subjects[]" value="English"> English
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label>NIC</label>
            <input type="text" name="nic" class="form-control">
        </div>

        <button type="submit" class="btn btn-danger">Save Student</button>
        <a href="{{ route('student.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

</body>
</html>
