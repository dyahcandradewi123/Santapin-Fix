document.addEventListener("DOMContentLoaded", () => {
  const timeGrid = document.querySelector(".time-grid");
  const nextButton = document.getElementById("next-button");
  const dateInput = document.getElementById("reservasi-date");

  // Daftar waktu yang akan ditampilkan
  const timeSlots = [
    "07:00", "08:00", "09:00", "10:00",
    "11:00", "12:00", "13:00", "14:00",
    "15:00", "16:00", "17:00", "18:00"
  ];

  // Atur tanggal minimum untuk input tanggal (besok)
  const today = new Date();
  const tomorrow = new Date(today);
  tomorrow.setDate(today.getDate() + 1); // Tambah 1 hari
  const tomorrowString = tomorrow.toISOString().split("T")[0]; // Format yyyy-mm-dd
  dateInput.min = tomorrowString;

  // Generate tombol waktu
  timeSlots.forEach(time => {
    const button = document.createElement("button");
    button.textContent = time;
    button.addEventListener("click", () => {
      document
        .querySelectorAll(".time-grid button")
        .forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");
    });
    timeGrid.appendChild(button);
  });

  // Validasi saat klik tombol "Selanjutnya"
  nextButton.addEventListener("click", () => {
    const selectedDate = dateInput.value;
    const selectedTime = document.querySelector(".time-grid button.active");

    if (!selectedDate || !selectedTime) {
      alert("Harap pilih tanggal dan waktu terlebih dahulu.");
    } else {
      alert(
        `Anda telah memilih:\nTanggal: ${selectedDate}\nWaktu: ${selectedTime.textContent}`
      );
    }
  });
});
