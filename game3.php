<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <table class="text-center">
        <thead>
            <tr>
                <td>Date</td>
                <td>Day</td>
                <td>Prize 1</td>
                <td>Prize 2</td>
                <td>Prize 3</td>
            </tr>
        </thead>
        <tbody id="draws"></tbody>
    </table>

    <script>
        // Function to fetch data from the server
        $.ajax({
    type: 'GET',
    url: 'db_connection.php',
    dataType: 'json', // Specify the data type as JSON
})
.done(function(response) {
    var data = response.data; // Access the 'data' key
    if (data.length > 0) {
        var html = '';
        data.forEach(function(item) {
            html += "<tr>";
            html += "<td>" + item.Date + "</td>";
            html += "<td>" + item.Day + "</td>";
            html += "<td>" + item['Prize 1'] + "</td>";
            html += "<td>" + item['Prize 2'] + "</td>";
            html += "<td>" + item['Prize 3'] + "</td>";
            html += "</tr>";
        });
        $('#draws').html(html);
    } else {
        $('#draws').html('<tr><td colspan="5">No data available</td></tr>');
    }
})
.fail(function(jqXHR, textStatus, errorThrown) {
    console.log(errorThrown);
});
    </script>

</body>
</html>
