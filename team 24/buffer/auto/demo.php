<!DOCTYPE html>
<html>
    <head>
        <title>Autocomplete Textbox Demo | PHP | jQuery</title>
        <!-- load jquery ui css-->
        <link href="path/to/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- load jquery library -->
        <script src="path/to/jquery-1.10.2.js"></script>
        <!-- load jquery ui js file -->
        <script src="path/to/jquery-ui.min.js"></script>

        <script type="text/javascript">
        $(function() {
            var availableTags = <?php include('autocomplete.php'); ?>;
            $("#department_name").autocomplete({
                source: availableTags,
                autoFocus:true
            });
        });
        </script>
    </head>
    <body>
        <label>Department Name</label></br>
        <input id="department_name" type="text" size="50" />
    </body>
</html>