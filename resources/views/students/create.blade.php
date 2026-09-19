@extends('layout')

@section('content')

<div class="form-container">

    <h1>Student Registration</h1>

    <form action="{{ route('students.store') }}" method="POST" id="studentForm">

        @csrf

        <div class="form-group">
            <label for="student_name">Student Name</label>

            <input
                type="text"
                id="student_name"
                name="student_name"
                value="{{ old('student_name') }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>

            <input
                type="date"
                id="date_of_birth"
                name="date_of_birth"
                value="{{ old('date_of_birth') }}"
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
                        {{ old('gender') == 'Male' ? 'checked' : '' }}
                    >
                    Male
                </label>

                <label>
                    <input
                        type="radio"
                        name="gender"
                        value="Female"
                        {{ old('gender') == 'Female' ? 'checked' : '' }}
                    >
                    Female
                </label>

                <label>
                    <input
                        type="radio"
                        name="gender"
                        value="Other"
                        {{ old('gender') == 'Other' ? 'checked' : '' }}
                    >
                    Other
                </label>

            </div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>

            <input
                type="text"
                id="phone"
                name="phone"
                value="{{ old('phone') }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="address">Address</label>

            <textarea
                id="address"
                name="address"
                rows="4"
                required
            >{{ old('address') }}</textarea>
        </div>

        <div class="form-group">
            <label for="course">Course</label>

            <select id="course" name="course" required>

                <option value="">Select Course</option>

                <option value="BCA"
                    {{ old('course') == 'BCA' ? 'selected' : '' }}>
                    BCA
                </option>

                <option value="BSc Computer Science"
                    {{ old('course') == 'BSc Computer Science' ? 'selected' : '' }}>
                    BSc Computer Science
                </option>

                <option value="BCom"
                    {{ old('course') == 'BCom' ? 'selected' : '' }}>
                    BCom
                </option>

                <option value="BBA"
                    {{ old('course') == 'BBA' ? 'selected' : '' }}>
                    BBA
                </option>

                <option value="BE Computer Science"
                    {{ old('course') == 'BE Computer Science' ? 'selected' : '' }}>
                    BE Computer Science
                </option>

            </select>
        </div>

        <div class="form-group">
            <label for="department">Department</label>

            <select id="department" name="department" required>

                <option value="">Select Department</option>

                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Commerce">Commerce</option>
                <option value="Business Administration">Business Administration</option>
                <option value="Electronics">Electronics</option>

            </select>
        </div>

        <button type="submit" class="btn">
            Register Student
        </button>

    </form>

</div>

@endsection