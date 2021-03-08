<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="/app.css" rel="stylesheet" />
</head>

<body>
 
    <div id="area"></div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script>
  var book = book("/test3.epub");
  var rendition = book.renderTo("area", {width: 600, height: 400});
  var displayed = rendition.display();
</script>
</body>

</html>