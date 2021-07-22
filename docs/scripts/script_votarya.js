  var click1=0;
        var x1=0;
        var click2=0;
        var x2=0;
        function foo(){
            var ima = document.getElementById("votocasilla2");
            if (click1 == 0){
                ima.src= "../media/voto.jpg";
                document.getElementById("list2").style["background"]="#DBD7D7";
            
            }
            if (click1==1){
                ima.src= "../media/casilla_voto.png";
                document.getElementById("list2").style["background"]="#FFFFFF";
            }

            click1=1-x1;
            x1=click1;

        }
        function foo2(){
            var imag = document.getElementById("votocasilla1");
            if (click2 == 0){
                imag.src= "../media/voto.jpg";
                document.getElementById("list1").style["background"]="#DBD7D7";
            
            }
            if (click2==1){
                imag.src= "../media/casilla_voto.png";
                document.getElementById("list1").style["background"]="#FFFFFF";
            }

            click2=1-x2;
            x2=click2;

        }
        function foo3(){
            ShowAlert();
            //alert(click1 + " hola " + click2);
        }
    

        var voto_resultado = "";

        function ShowAlert(){
            swal({
            title: "Votar",
            text: "Esta seguro de su voto",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Su voto ha sido registrado con exito!", {
                icon: "success",


            });
                document.getElementById("fond").style.display = "none";
                if(click1 == 1 && click2 ==1) voto_resultado="Su voto sea registrado como Nulo";
                if(click1 == 0 && click2 ==0) voto_resultado="Su voto sea registrado como Blanco";
                if(click1 == 1 && click2 ==0) voto_resultado="Ha votado por la lista lista 2";
                if(click1 == 0 && click2 ==1) voto_resultado="Ha votado por la lista lista 1";
                document.getElementById("fond2").style.display = "block";
                document.getElementById("voto").textContent=voto_resultado;
           }else {
                swal("Vote nuevamente!");
             }  
                });
        }