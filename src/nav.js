import $ from "jquery";

(function() {

    const inicializar = () => {
        $(window).scroll( () => {
            if($(window).scrollTop() > 100) {
              $(".nav").css("box-shadow", "0 1px 3px 3px rgba(0,0,0,0.4)")
            }else {
              $(".nav").css("box-shadow", "none")
            }
          })
      
          $(window).resize(function() {
            if($(".contenido").width() <= 400) {
              $(".contenido").css("overflow", "hidden")
            }
          })
        $(".input-icon input").focus((e) => {
            $(e.target).parent().css("width", "100%")
        })

        $(".input-icon input").blur((e) => {
            $(e.target).parent().css("width", "80%")
        })
    }
    const Nav = {
        iniciar: () => inicializar()
    }

    window.Nav = Nav
})()

export default Nav