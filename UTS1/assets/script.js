// Smooth scroll untuk link dalam halaman yang sama
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('a[href*="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      const [page, hash] = href.split("#"); // Pisahkan nama file dan ID target

      // Cek apakah hash ada (misalnya #new-arrivals)
      if (!hash) return;

      // Cek apakah halaman link sama dengan halaman sekarang
      const currentPage = window.location.pathname.split("/").pop(); // ambil nama file aktif
      if (page === "" || page === currentPage) {
        // Kalau di halaman yang sama, aktifkan smooth scroll
        e.preventDefault();
        const target = document.getElementById(hash);
        if (target) {
          target.scrollIntoView({ behavior: "smooth" });
        }
      }
      // Kalau beda halaman, biarkan normal (biar pindah halaman)
    });
  });
});
