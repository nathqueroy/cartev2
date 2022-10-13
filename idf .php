<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <style>
    #map {
      max-width: 100%;
      max-height: 100%;
      z-index : 0;
      stroke-width: 10;
      stroke: #FFFFFF;
      
    }

    #map path {
      fill: #86AAE0;
      stroke: #FFFFFF;
      stroke-width: 0,6;
      transition: fill 0.2s, stroke 0.3s;
    }

    #map path:hover {
      fill: red; 
      stroke: white;
    }

    #map .separator {
      stroke: #ccc;
      fill: none;
      stroke-width: 1.5;
    }

    #map .separator:hover {
      stroke: #ccc;
      fill: none;
    }

    
      .dep {
        
        font: bold 9px serif; 
        fill: black ;
        /*text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000; */
        position:relative;
        z-index:10;
        }
    }

    .js{
      align-self: flex-start;
    }
  </style>
</head>
<body>
<svg id="map" width="730px" height="800px" viewBox="0 0 800 543" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
      <g id="france" sketch:type="MSLayerGroup" transform="translate(0.000000, 1.000000)">
        <g id="complete_map" sketch:type="MSShapeGroup">
        
<g transform="matrix(5 0 0 5 0 0)">
    <path  data-num="93"  d="M311.6641 141.36159L314.5841 141.40158L315.3641 144.02158L315.4041 145.51158L317.63412 145.13158L317.29413 146.31157L314.83414 145.57156L312.03415 146.44156L307.62415 144.20155L308.45413 142.88155L309.53412 143.51155L311.6641 141.36159z" stroke="none" fill="#000000" fill-rule="nonzero" />
    <path  data-num="75" d="M309.98407 138.2116L312.21408 138.8116L311.6641 141.3616L309.5341 143.5116L308.4541 142.88159L307.6241 144.2016L312.03412 146.4416L310.9641 151.2816L310.0541 151.7216L309.53412 150.1216L307.8741 149.3616L306.3041 149.7816L304.97412 148.7816L304.23413 144.9416L304.93414 144.6316L304.40414 143.2216L305.26413 141.7016L306.6241 140.8216L309.98407 138.2116z" stroke="none" fill="#000000" fill-rule="nonzero" />
    <path  data-num="92" d="M321.14407 134.2916L321.88406 134.2316L322.44406 136.2416L321.63406 136.33159L323.31406 139.16159L322.61404 141.59158L321.48404 142.16159L322.51404 143.2116L322.07404 144.47159L322.98404 147.23158L320.40405 144.24158L315.36404 144.02158L314.58405 141.40158L311.66403 141.36159L312.21402 138.81158L309.984 138.21158L310.644 137.19157L312.194 137.74158L313.484 136.73158L316.52402 137.94159L318.634 137.02159L321.14407 134.2916z" stroke="none" fill="#000000" fill-rule="nonzero" />
    <path data-num="94"  d="M315.36407 144.02159L320.40408 144.2416L322.98407 147.2316L322.64407 149.27159L323.76407 149.9616L322.57407 151.30159L322.02408 154.41159L320.93408 154.42159L319.65408 151.45158L315.48407 152.80159L313.76407 152.69159L313.62405 151.55159L312.02405 150.89159L310.96405 151.28159L312.03406 146.44159L314.83405 145.5716L317.29404 146.3116L317.63403 145.1316L315.40402 145.51161L315.36407 144.02159z" stroke="none" fill="#000000" fill-rule="nonzero" />
</g>
</g>
      </g>
    </g>
</svg>
<div class="js">
<script>
  document.addEventListener('DOMContentLoaded', function(){
    map = this.getElementById('map');
    paths = map.getElementsByTagName('path');
    for (var i = 0; i < paths.length; i++) {
      paths[i].addEventListener('click', function(e){
        console.log('Dpt: '+e.target.getAttribute('data-num'));
        var ab = e.target.getAttribute('data-num');
        document.writeln(ab);
        
        document.location.href="./cartes.php?zone="+ab;
        
      })
    }
  })
</script>
<br>
</div>
</HTML>