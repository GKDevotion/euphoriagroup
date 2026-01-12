 
    // Set target date & time
    const targetDate = new Date("2026-02-01T00:00:00").getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const difference = targetDate - now;

        if (difference <= 0) {
            document.getElementById("days").innerHTML = "00";
            document.getElementById("hours").innerHTML = "00";
            document.getElementById("minutes").innerHTML = "00";
            document.getElementById("seconds").innerHTML = "00";
            clearInterval(countdownInterval);
            return;
        }

        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours.toString().padStart(2, "0");
        document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, "0");
        document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, "0");
    }

    // 🔹 Run immediately on page load
    updateCountdown();

    // 🔹 Then run every second
    const countdownInterval = setInterval(updateCountdown, 1000);
 