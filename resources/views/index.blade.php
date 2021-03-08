<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="/app.css" rel="stylesheet" />
</head>

<body>


    <!-- <iframe src='/iftest' id="element" style="width:100%;"></iframe> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <!-- <script>
        $(document).ready(function() {
            $('iframe').ready(function() {
                var element = $(document.querySelector("#element")).contents().find('body')[0];
                html2canvas(element).then(canvas => {
                    document.body.appendChild(canvas)
                });
            });
        });

        // element.remove();
    </script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.1.3/pixi.min.js"></script>
<script>

const app = new PIXI.Application({ backgroundColor: 0x1099bb });
document.body.appendChild(app.view);


const style = new PIXI.TextStyle({
    fontFamily: 'Arial',
    fontSize: 10,
    fontStyle: 'italic',
    fontWeight: 'bold',
    textAlign:'centter'
    // fill: ['#ffffff', '#00ff99'], // gradient
    // stroke: '#4a1850',
    // strokeThickness: 5,
    // dropShadow: true,
    // dropShadowColor: '#000000',
    // dropShadowBlur: 4,
    // dropShadowAngle: Math.PI / 6,
    // dropShadowDistance: 6,
    // wordWrap: true,
    // wordWrapWidth: 440,
    // lineJoin: 'round'
});
let a = document.getElementById('element')
console.log(a)

const richText = new PIXI.Text(a, style);
richText.x = 0;
richText.y = 0;

app.stage.addChild(richText);




</script> -->
</body>

</html>