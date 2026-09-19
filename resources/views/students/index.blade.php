@extends('layout')

@section('content')

<div class="page-header">

    <h1>Registered Students</h1>

    <a href="{{ route('students.create') }}" class="btn">
        + Register Student
    </a>

</div>

@if($students->count() > 0)

<div class="table-container">

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @foreach($students as $student)

            <tr>

                <td>{{ $student->id }}</td>

                <td>{{ $student->student_name }}</td>

                <td>{{ $student->email }}</td>

                <td>{{ $student->phone }}</td>

                <td>{{ $student->course }}</td>

                <td>{{ $student->department }}</td>

                <td class="actions">

                    <a
                        href="{{ route('students.show', $student) }}"
                        class="btn-view"
                    >
                        View
                    </a>

                    <a
                        href="{{ route('students.edit', $student) }}"
                        class="btn-edit"
                    >
                        Edit
                    </a>

                    <form
                        action="{{ route('students.destroy', $student) }}"
                        method="POST"
                        class="delete-form"
                    >

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn-delete">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@else

<div class="empty">

    <h3>No students registered yet.</h3>

    <a href="{{ route('students.create') }}" class="btn">
        Register First Student
    </a>

</div>

@endif

@endsection