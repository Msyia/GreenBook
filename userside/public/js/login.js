document.getElementById("loginForm").addEventListener("submit", function(event) {
    // Ambil nilai input dari form
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    
    // RegEx untuk validasi email
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
    // RegEx untuk validasi password: minimal 8 karakter, mengandung huruf, angka, dan karakter khusus
    const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
  
    let errorMessage = "";
  
    // Validasi email
    if (!emailPattern.test(username)) {
      errorMessage += "Username harus berupa email yang valid.\n";
    }
  
    // Validasi password
    if (!passwordPattern.test(password)) {
      errorMessage += "Password harus memiliki minimal 8 karakter, termasuk huruf, angka, dan karakter khusus.\n";
    }
  
    // Jika ada pesan error, tampilkan dan hentikan pengiriman form
    if (errorMessage) {
      alert(errorMessage);
      event.preventDefault(); // Mencegah form submit jika validasi gagal
    }
  });
  