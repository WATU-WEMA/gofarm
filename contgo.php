   <!DOCTYPE html>
<html>
<head>
<style>
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }



.grid-container {
    display: grid;
    grid-template-areas:
        'header header header header header header'
        'menu main main main right right'
        'menu footer footer footer footer footer';
    grid-gap: 10px;
    background-color: #2196F3;
    padding: 10px;
    width: auto;
    height: ;
}

.grid-container > div {
    background-color: rgba(255, 255, 255, 0.8);
    text-align: center;
    padding: 20px 0;
    font-size: 30px;}
 .fruit-container {
    display: grid;
    grid-template-columns: auto auto auto;
    background-color: #2196F3;
    padding: 10px;}
.grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.8);
    padding: 20px;
    font-size: 30px;
    text-align: center;
}
 body{

    background-image:url('body2.jpeg');
    background-repeat: no repeat;
    position: relative;
    animation-name: example;
    animation-duration: 1s;
}

@keyframes example {
    0%   {background-color:red; left:0px; top:0px;}
    25%  {background-color:yellow; left:200px; top:0px;}
    50%  {background-color:blue; left:200px; top:200px;}
    75%  {background-color:green; left:0px; top:200px;}
    100% {background-color:red; left:0px; top:0px;}
}
h1
{
    color: #64F766;
    text-align:center;
}
 #info
 {
     color: #CCC014 ;
 }




</style>
</head>
<body>

<h1>GO FARM</h1>

<p id="info"><marquee><b>UNAWEZA KUJIFUNZA LOLOTE KATI YA UYAPENDAYO KATIKA HUU UKURASA WETU</b></marquee></p>

<div class="grid-container">
    <div class="item1"><a href="">TATHMINI</a></div>
    <div class="item2"><a href="">MASOKO</a></div>
    <div class="item3"><a href="">HISTORIA</a></div>
    <div class="item4"><a href="">TAARIFA</a></div>
    <div class="item5"><a href="">MAWAKALA</a></div>
</div>
  <div class="fruit-container">
    <div class="grid-item"><a href="embe.php">EMBE</a></div>
    <div class="grid-item"><a href="2">TIKITI</a></div>
    <div class="grid-item"><a href="3">CHUNGWA</a></div>
    <div class="grid-item"><a href="4">NANASI</a></div>
    <div class="grid-item"><a href="5">PAPAI</a></div>
    <div class="grid-item"><a href="6">PILIPILI</a></div>
    <div class="grid-item"><a href="7">NYANYA</a></div>
    <div class="grid-item"><a href="8">VITUNGUU</a></div>
    <div class="grid-item"><a href="9">HOHO</a></div>
</div>


</body>
</html>
