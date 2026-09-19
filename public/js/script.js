document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("studentForm");

    if (form) {

        form.addEventListener("submit", function (event) {

            const name = document
                .getElementById("student_name")
                .value
                .trim();

            const email = document
                .getElementById("email")
                .value
                .trim();

            const phone = document
                .getElementById("phone")
                .value
                .trim();

            if (name.length < 3) {
                alert("Student name must contain at least 3 characters.");
                event.preventDefault();
                return;
            }

            const emailPattern =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                event.preventDefault();
                return;
            }

            const phonePattern = /^[0-9]{10}$/;

            if (!phonePattern.test(phone)) {
                alert("Phone number must contain exactly 10 digits.");
                event.preventDefault();
                return;
            }

        });

    }

    const deleteForms = document.querySelectorAll(".delete-form");

    deleteForms.forEach(function (form) {

        form.addEventListener("submit", function (event) {

            const confirmed = confirm(
                "Are you sure you want to delete this student?"
            );

            if (!confirmed) {
                event.preventDefault();
            }

        });

    });

});