<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatable</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
</head>
<body>

             <div class="container">
                <table id="myTable" class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Item Code</th>
                            <th>Description 1</th>
                            <th>Description 2</th>
                            <th>Volume</th>
                            <th>Destination</th>
                            <th>GTHIN</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td>A12C980987</td>
                            <td>asam sulfur</td>
                            <td>nitorgren hibrida</td>
                            <td>120 ml</td>
                            <td>Local</td>
                            <td>9893123980761</td>
                        </tr>
                        <tr>
                            <td>B12C980987</td>
                            <td>asam sulfur</td>
                            <td>nitorgren hibrida</td>
                            <td>120 ml</td>
                            <td>Local</td>
                            <td>9893123980761</td>
                        </tr>
                        <tr>
                            <td>B12C980987</td>
                            <td>asam sulfur</td>
                            <td>nitorgren hibrida</td>
                            <td>120 ml</td>
                            <td>Export</td>
                            <td>9893123980761</td>
                        </tr>
                    </tbody>
                </table>
             </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
    $(document).ready( function () {
       $('#myTable').DataTable(); 
    });
</script>
</body>
</html>
