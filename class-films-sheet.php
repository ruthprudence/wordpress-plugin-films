

<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class Film_Sheet {
    private $sheetId = $_ENV['API_KEY'];
    private $apiKey = $_ENV['SHEET_LINK'];

    // Fetch the data from Google Sheets
    public function get_sheet_data() {
        $url = 'https://sheets.googleapis.com/v4/spreadsheets/' . $this->sheetId . '/values/A1:D100?key=' . $this->apiKey;
        $response = wp_remote_get($url);

        if (is_wp_error($response)) {
            return false;
        }

        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);

        return isset($data['values']) ? $data['values'] : false;
    }
}
?>
