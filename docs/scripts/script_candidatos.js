     function onraton(){
          document.getElementById("btn_lista1").style["background-color"]="#B11F1F";
          document.getElementById("btn_lista1").style["color"]="white";
          document.getElementById("btn_lista2").style["background-color"]="#EBE8E8";
          document.getElementById("btn_lista2").style["color"]="black";  
       }

       function offraton(){
          document.getElementById("btn_lista2").style["background-color"]="#B11F1F";
          document.getElementById("btn_lista2").style["color"]="white";
          document.getElementById("btn_lista1").style["background-color"]="#EBE8E8";
          document.getElementById("btn_lista1").style["color"]="black";
       }

       var lista_img =["../media/escuela_ibio.png",
      "../media/escuela_ifisica.png",
      "../media/escuela_igeo.png",
      "../media/escuela_imath.png",
      "../media/escuela_iquim.png"];

  var cont_login_Img =0;

  function cambio_image_pie(){
    var imagen=document.getElementById("imagen_header");
    if (cont_login_Img==5) cont_login_Img=0;
    imagen.src= lista_img[cont_login_Img];
    cont_login_Img++;
    setTimeout( cambio_image_pie, 2000);

}

 $(document).ready(function (){
            $("#btn_lista1").click(function(){
              $(".lista2").hide();
              $(".lista1").show(2000);
              document.getElementById("btn_lista1").style["background-color"]="#B11F1F";
              });

            $("#btn_lista2").click(function(){
              $(".lista1").hide();
              $(".lista2").show(2000);

              });

    } );