<?php

$table_header = array('Name', 'Age', 'Education', 'Certificate', 'Training');
$table_row_1 = [['Jake', 32, 'MBA', 'Digital Marketing Diploma', ''], ['Kim', 56, 'Undergrad', 'Google Adwords Certified', '6 Months SDA'], ['Huang', 19, '', 'Digital Marketing Diploma', 'Sales Training'], ['Janet', 28, 'BFA', 'Video Marketing Diploma', '']];
$table_row_2 = [['Amir', 28, '', '', 'One year Ads Mgtmt'], ['Andrew', 22, 'BBA', '', '6 Months SDA'], ['Emery', 21, '', '', 'Sales Training'], ['Alex', 28, 'BBA', '', '']];


print_table($table_row_1, $table_header);
print_table($table_row_2, $table_header);

function print_table($data, $table_header) {
    echo '<table border="1">';
    
    echo '<tr>';
    foreach ($table_header as $val) {
        echo '<th>' . $val . '</th>';
    }
    echo '</tr>';

    foreach ($data as $r) {
        echo '<tr>';
        foreach ($r as $key) {
            echo '<td>' . $key . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>