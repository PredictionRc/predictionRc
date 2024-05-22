<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <title>Results</title>
</head>
<body>
    <div id="results"></div>
    <a href="prediction.php">Back to Predictions</a>
    <script>
        const resultsList = document.getElementById('results')
        new URLSearchParams(window.location.search).forEach((value,name) => {
            resultsList.append(`${name}: ${value}`)
            resultsList.append(document.createElement('br'))
        })
    </script>
</body>
</html>