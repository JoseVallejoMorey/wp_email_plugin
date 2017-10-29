document.addEventListener('DOMContentLoaded', launchPopup);

function launchPopup(){
  var height = document.documentElement.clientHeight;
  var width = document.documentElement.clientWidth;
  var popupContent = document.createElement('div');
  popupContent.innerHTML = '<div class="popup-wrap" style="width:'+width+'px; height:'+height+'px; background:rgba(0,0,0,0.85); position:fixed; top:0; left:0;"><div class="popup-box"><span id="close-btn">x</span><h2>Conseguido</h2><a class=" popup-close" href="#">Aceptar</a></div></div>';

  //console.log(popupContent);

  var aceptButton = popupContent.getElementsByTagName('a');
  //console.log(closeButton);
  aceptButton[0].addEventListener('click', function(){
    popupContent.remove();
  });


  var closeButton = popupContent.getElementsByTagName('span');
  console.log(closeButton);
  closeButton[0].addEventListener('click', function(){
    popupContent.remove();
  });


  document.body.appendChild(popupContent);
}
