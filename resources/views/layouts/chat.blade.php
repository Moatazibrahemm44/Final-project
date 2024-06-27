<!DOCTYPE html>
<html>
<head>
    <title>Run Python Script</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <button id="run-script">Run Python Script</button>
    <div id="output"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#run-script').click(function() {
                $.ajax({
                    url: '/run-python-script',
                    type: 'POST', // Use POST instead of GET
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
                    },
                    success: function(response) {
                        $('#output').text(response.output);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>