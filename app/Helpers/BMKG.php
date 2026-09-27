<?php

    namespace App\Helpers;

    class BMKG
    {
        public static function cuaca(){
            $sekarang = "32.73.10.1006";
            // Get API URL
            $api_url = "https://api.bmkg.go.id/publik/prakiraan-cuaca?adm4=".$sekarang;
            $response_body = @file_get_contents($api_url);

            // Check if fail
            if ($response_body === false) {
                die("ERROR: Gagal mengambil data.");
            }

            // Decode String JSON
            $data = json_decode($response_body, true);

            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                die(
                    "ERROR: Data bukan format JSON yang valid. " .
                        htmlspecialchars(json_last_error_msg())
                );
            }

            // Location
            if (isset($data["lokasi"]["desa"]) && isset($data["lokasi"]["kecamatan"])) {
                echo "<h6 class='text-xs text-gray-500'>Desa/Kelurahan: " .
                    htmlspecialchars($data["lokasi"]["desa"]) .
                    "</h6>"

                    ;
            } else {
                echo "Lokasi Tidak Ditemukan";
            }
    }
}