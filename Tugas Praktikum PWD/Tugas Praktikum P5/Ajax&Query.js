$(document).ready(function() {
            $("#btnLoad").click(function() {
                // Memanggil file PHP dengan AJAX
                $.ajax({
                    url: "data.php",     // file yang diambil
                    type: "GET",         // metode pengiriman (GET/POST)
                    success: function(response) {
                        // Menampilkan hasil ke dalam div
                        $("#hasil").html(response);
                    },
                    error: function() {
                        $("#hasil").html("Terjadi kesalahan saat mengambil data.");
                    }
                });
            });
        });