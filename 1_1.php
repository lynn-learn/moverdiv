<script>
//============================================================+
// File name   : 1_1.php
// Version     : 1 
// Begin       : 20021-09-03
// Author      : Derlyn Garzon - Lynn projects -  https://www.youtube.com/channel/UCTLGtkalqf5CqbR6734VdMw?sub_confirmation=1 - Lynn learn
// -------------------------------------------------------------------
// Copyright (C) 2021 Derlyn Garzon - Lynn projects

</script>

<html>
<head>
<style> 
.d {
  width: 100px;
  height: 100px;
  background-color: red;
  position: absolute;
}


</style>
</head>
<body>
<script>
function moverElemento(elem){

    var compEl = window.getComputedStyle(elem);
    hElem = compEl.getPropertyValue('top');
    var hElem = hElem.replace('px','');
    hElem = parseFloat(hElem);
    //eliminar px de hElem, convertir hElem en int
    console.log(typeof(hElem))
    console.log(hElem);
    if (hElem > 10) {
        console.log(hElem);
        newheight = hElem-10;
        elem.style.top = newheight + 'px';
        window.setTimeout(function() {moverElemento(elem);},300);
    }    
}




</script>
<!---<div onclick=''>click</div>-->
<div style='color:#fff;background:green;height:200px'> other div</div>
<div id='d' class='d'>11</div>

</body>
</html>
<script>
moverElemento(document.getElementById("d"));
</script>