function toggleLogContent(file) {
    const contentDiv = document.getElementById('content_' + file);
    if (contentDiv.style.display === "none" || contentDiv.style.display === "") {
        fetch('logs/' + file)
            .then(response => response.text())
            .then(data => {
                contentDiv.innerHTML = data; // Tampilkan konten log
                contentDiv.style.display = "block"; // Tampilkan div

                // Gulir ke konten log yang baru ditampilkan
                setTimeout(() => {
                    contentDiv.scrollIntoView({ behavior: 'smooth' });
                    contentDiv.scrollTop = contentDiv.scrollHeight; // Gulir ke bagian paling bawah
                }, 100); // Delay 100ms
            })
            .catch(error => console.error('Error fetching log:', error));
    } else {
        contentDiv.style.display = "none"; // Sembunyikan div
    }
}