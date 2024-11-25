// Function to enable editing of profile
function editProfile() {
    const form = document.getElementById("profileForm");
    const inputs = form.querySelectorAll("input");
    const editButton = document.querySelector(".btn.btn-dark");

    let isReadOnly = inputs[0].readOnly; // Mengecek apakah input dalam keadaan readonly

    inputs.forEach((input) => {
        // Toggle readOnly status pada setiap input
        input.readOnly = !isReadOnly;
        // Menambah/menghapus class border-primary saat mengedit
        if (!isReadOnly) {
            input.classList.add("border-primary");
        } else {
            input.classList.remove("border-primary");
        }
    });

    // Ubah teks pada tombol sesuai dengan status form (edit atau tidak)
    if (isReadOnly) {
        editButton.textContent = "Save Profile"; // Teks tombol saat dalam mode edit
    } else {
        editButton.textContent = "Edit Profile"; // Teks tombol saat dalam mode simpan
        // Anda bisa menambahkan logika untuk menyimpan perubahan, misalnya dengan AJAX atau simpan di localStorage
    }
}

// Function to submit and save profile information
function submit() {
    const form = document.getElementById("profileForm");
    const inputs = form.querySelectorAll("input");

    let userName = document.getElementById("userName").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;

    // Simpan data yang diedit, misalnya bisa disimpan ke localStorage atau API
    console.log("Saved Profile Information:");
    console.log("User Name: " + userName);
    console.log("Email: " + email);
    console.log("Phone: " + phone);

    // Mengatur input agar tidak bisa diedit lagi setelah disimpan
    inputs.forEach((input) => {
        input.readOnly = true;
        input.classList.remove("border-primary");
    });

    // Mengubah teks tombol kembali ke "Edit Profile"
    const editButton = document.querySelector(".btn.btn-dark");
    editButton.textContent = "Edit Profile"; // Teks tombol setelah disimpan
}

// Function to handle logout
function logout() {
    // Hapus sesi atau data pengguna, misalnya dengan localStorage.clear() atau redireksi ke halaman login
    alert("You have been logged out.");
    window.location.href = "login_user.html"; // Redirect to login page after logout
}

// Initialize function
document.addEventListener("DOMContentLoaded", () => {
    const editButton = document.querySelector(".btn.btn-dark");

    // Set initial button text and bind click event
    editButton.textContent = "Edit Profile"; // Default button text
    editButton.addEventListener("click", () => {
        // If the button text is "Edit Profile", enable edit mode, otherwise save profile
        if (editButton.textContent === "Edit Profile") {
            editProfile();
        } else {
            submit();
        }
    });
});
