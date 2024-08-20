<?php
// Basic table rendering
if (!empty($data)) {
    echo '<table class="film-sheet-table">';
    foreach ($data as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . esc_html($cell) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<p>No data found.</p>';
}
?>
