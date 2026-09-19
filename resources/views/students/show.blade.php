@extends('layout')

@section('content')

<div class="details-container">

    <h1>Student Details</h1>

    <div class="details">

        <p>
            <strong>ID:</strong>
            {{ $student->id }}
        </p>

        <p>
            <strong>Name:</strong>
            {{ $student->student_name }}
        </p>

        <p>
            <strong>Date of Birth:</strong>
            {{ $student->date_of_birth }}
        </p>

        <p>
            <strong>Gender:</strong>
            {{ $student->gender }}
        </p>

        <p>
            <strong>Email:</strong>
            {{ $student->email }}
        </p>

        <p>
            <strong>Phone:</strong>
            {{ $student->phone }}
        </p>

        <p>
            <strong>Address:</strong>
            {{ $student->address }}
        </p>

        <p>
            <strong>Course:</strong>
            {{ $student->course }}
        </p>

        <p>
            <strong>Department:</strong>
            {{ $student->department }}
        </p>

    </div>

    <a
        href="{{ route('students.edit', $student) }}"
        class="btn-edit"
    >
        Edit
    </a>

    <a
        href="{{ route('students.index') }}"
        class="btn-secondary"
    >
        Back
    </a>

</div>

@endsection