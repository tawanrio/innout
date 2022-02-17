//var openCloseMenu = true;
// document.querySelector('.menu-toggle').addEventListener('click', function(){
//     body = document.querySelector('body')
//     if(openCloseMenu){
    //         body.className = 'hide-sidebar';
    //         openCloseMenu = false;
    //     }else{
        //         body.removeAttribute("class");
        //         openCloseMenu = true;
        //     }
        // });


        (function (){//função auto invocada (utilizada para amarrar o codigo e não deixar
                    //  variavel disponivel em escopo global)
                    // no caso do meu codigo não tem utilidade porem deixei disponivel para aprendizado
            document.querySelector('.menu-toggle').onclick = function (e){
                const body = document.querySelector('body');
                body.classList.toggle('hide-sidebar');
            }
        })();