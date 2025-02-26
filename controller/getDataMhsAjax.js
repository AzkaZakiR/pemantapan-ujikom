function ajaxGetDataMhs() {
    $.ajax({
        url: 'get_data_mhs.php',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            var tableBody = $('#table-mhs');
            tableBody.empty();
            $.each(data, function (index, value) {
                var row = $('<tr>');
                row.append($('<td>').text(value.nim));
                row.append($('<td>').text(value.nama));
                row.append($('<td>').text(value.jurusan));
                tableBody.append(row);
            });
            // Process the data as needed
        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', status, error);
        }
    });
}

ajaxGetDataMhs();