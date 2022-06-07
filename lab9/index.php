<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<input id="img1" type="hidden" src="lines/line_1.png" width="600" height="600" style="position: absolute;margin-top: 184px;margin-left: 724px">
<input id="img2" type="hidden" src="lines/line_2.png" width="600" height="600" style="position: absolute;margin-top: 190px;margin-left: 724px">
<input id="img3" type="hidden" src="lines/line_3.png" width="600" height="600" style="position: absolute;margin-top: 193px;margin-left: 724px">
<input id="img4" type="hidden" src="lines/line_4.png" width="600" height="600" style="position: absolute;margin-top: 190px;margin-left: 721px">
<input id="img5" type="hidden" src="lines/line_5.png" width="600" height="600" style="position: absolute;margin-top: 190px;margin-left: 725px">
<input id="img6" type="hidden" src="lines/line_6.png" width="600" height="600" style="position: absolute;margin-top: 190px;margin-left: 727px">
<input id="img7" type="hidden" src="lines/line_7.png" width="600" height="600" style="position: absolute;margin-top: 190px;margin-left: 724px">
<input id="img8" type="hidden" src="lines/line_8.png" width="600" height="600" style="position: absolute;margin-top: 190px;margin-left: 724px">

<center>
    <br><br>
    <h4 style="font-weight: bold">Разработчики: Илья Березин, Артём Топалов, Сергей Ныч.</h4>
    <br>
    <h1 id="player" style="font-weight: bold"><div id="player"></div> </h1>
    <br>


</center>


<div class="game">
    <div id="elem">
        <div class="cell" id="insideCell1"></div>
        <div class="cell" id="insideCell2"></div>
        <div class="cell" id="insideCell3"></div>
        <div class="cell" id="insideCell4"></div>
        <div class="cell" id="insideCell5"></div>
        <div class="cell" id="insideCell6"></div>
        <div class="cell" id="insideCell7"></div>
        <div class="cell" id="insideCell8"></div>
        <div class="cell" id="insideCell9"></div>
    </div>
</div>

<div style="text-align: center;">
    <br><br>
    <form  type="reset" name="myActionName" method="POST">
         <input style="width: 200px; height: 70px; font-size: 25px; font-family: Geometria;
          font-weight: bold" name="myActionName" class="btn" type="submit" value="Новая игра" id="knopka">
    </form>
</div>
<script type="text/javascript" src="main.js"></script>
</body>
</html>