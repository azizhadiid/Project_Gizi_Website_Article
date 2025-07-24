document.addEventListener("DOMContentLoaded", function () {
    // 🔒 Logout confirmation
    const logoutButton = document.querySelector(".logout");
    
    if (logoutButton) {
        logoutButton.addEventListener("click", function (event) {
            event.preventDefault();
            const logoutUrl = this.getAttribute("href");

            Swal.fire({
                title: "Apakah Anda yakin ingin logout?",
                text: "Anda akan keluar dari sesi saat ini.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, logout!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = logoutUrl;
                }
            });
        });
    }
});
