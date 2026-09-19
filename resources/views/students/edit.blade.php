@extends('layout')

@section('content')

<div class="form-container">

    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">

            <label>Student Name</label>

            <input
                type="text"
                name="student_name"
                value="{{ old('student_name', $student->student_name) }}"
                required
            >

        </div>

        <div class="form-group">

            <label>Date of Birth</label>

            <input
                type="date"
                name="date_of_birth"
                value="{{ old('date_of_birth', $student->date_of_birth) }}"
                required
            >

        </div>

        <div class="form-group">

            <label>Gender</label>

            <div class="radio-group">

                <label>
                    <input
                        type="radio"
                        name="gender"
                        value="Male"
                        {{ old('gender', $student->gender) == 'Male' ? 'checked' : '' }}
                    >
                    Male
                </label>

                <label>
                    <input
                        type="radio"
                        name="gender"
                        value="Female"
                        {{ old('gender', $student->gender) == 'Female' ? 'checked' : '' }}
                    >
                    Female
                </label>

                <label>
                    <input
                        type="radio"
                        name="gender"
                        value="Other"
                        {{ old('gender', $student->gender) == 'Other' ? 'checked' : '' }}
                    >
                    Other
                </label>

            </div>

        </div>

        <div class="form-group">

            <label>Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email', $student->email) }}"
                required
            >

        </div>

        <div class="form-group">

            <label>Phone</label>

            <input
                type="text"
                name="phone"
                value="{{ old('phone', $student->phone) }}"
                required
            >

        </div>

        <div class="form-group">

            <label>Address</label>

            <textarea
                name="address"
                rows="4"
                required
            >{{ old('address', $student->address) }}</textarea>

        </div>

        <div class="form-group">

            <label>Course</label>

            <select name="course" required>

                <option value="">Select Course</option>

                <option value="BCA"
                    {{ old('course', $student->course) == 'BCA' ? 'selected' : '' }}>
                    BCA
                </option>

                <option value="BSc Computer Science"
                    {{ old('course', $student->course) == 'BSc Computer Science' ? 'selected' : '' }}>
                    BSc Computer Science
                </option>

                <option value="BCom"
                    {{ old('course', $student->course) == 'BCom' ? 'selected' : '' }}>
                    BCom
                </option>

                <option value="BBA"
                    {{ old('course', $student->course) == 'BBA' ? 'selected' : '' }}>
                    BBA
                </option>

                <option value="BE Computer Science"
                    {{ old('course', $student->course) == 'BE Computer Science' ? 'selected' : '' }}>
                    BE Computer Science
                </option>

            </select>

        </div>

        <div class="form-group">

            <label>Department</label>

            <select name="department" required>

                <option value="">Select Department</option>

                <option value="Computer Science"
                    {{ old('department', $student->department) == 'Computer Science' ? 'selected' : '' }}>
                    Computer Science
                </option>

                <option value="Information Technology"
                    {{ old('department', $student->department) == 'Information Technology' ? 'selected' : '' }}>
                    Information Technology
                </option>

                <option value="Commerce"
                    {{ old('department', $student->department) == 'Commerce' ? 'selected' : '' }}>
                    Commerce
                </option>

                <option value="Business Administration"
                    {{ old('department', $student->department) == 'Business Administration' ? 'selected' : '' }}>
                    Business Administration
                </option>

                <option value="Electronics"
                    {{ old('department', $student->department) == 'Electronics' ? 'selected' : '' }}>
                    Electronics
                </option>

            </select>

        </div>

        <button type="submit" class="btn">
            Update Student
        </button>

        <a href="{{ route('students.index') }}" class="btn-secondary">
            Cancel
        </a>

    </form>

</div>

@endsection