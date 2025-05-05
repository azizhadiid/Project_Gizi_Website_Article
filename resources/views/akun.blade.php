@extends('templates.mainLayoutUser')

@section('title', 'Akun')

@section('konten')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll("#navmenu ul li a");

        navLinks.forEach(link => {
            link.addEventListener("click", function () {
                // Hapus kelas 'active' dari semua link
                navLinks.forEach(nav => nav.classList.remove("active"));

                // Tambahkan kelas 'active' ke link yang diklik
                this.classList.add("active");
            });
        });
    });

</script>
@endsection
