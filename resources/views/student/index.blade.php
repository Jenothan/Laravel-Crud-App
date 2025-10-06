<!DOCTYPE html>
<html>

<head>
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4">Students List</h2>

        <a href="{{ route('student.create') }}" class="btn btn-primary mb-3">+ Add New Student</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Grade</th>
                    <th>Subjects</th>
                    <th>Phone</th>
                    <th>NIC</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $stu)
                    <tr>
                        <td>{{ $stu->id }}</td>
                        <td>{{ $stu->first_name }}</td>
                        <td>{{ $stu->last_name }}</td>
                        <td>{{ $stu->gender }}</td>
                        <td>{{ $stu->grade }}</td>
                        <td>
                            @php
                                $subjects = json_decode($stu->subjects, true);
                            @endphp
                            {{ $subjects ? implode(', ', $subjects) : 'N/A' }} 
                        </td>
                        <td>{{ $stu->phone }}</td>
                        <td>{{ $stu->nic }}</td>
                        <td>{{ $stu->address }}</td>
                        <td><button class="btn btn-warning">edit</button>
                            <button class="btn btn-danger">delete</button>
                            {{-- <button class="btn btn-info">show</button> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
