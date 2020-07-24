import $ from "jquery";

(function() {

    const inicializar = () => {
        $(".titulo ul").hide()
        $(".titulo ul").addClass("invisible")
        $(".titulo").click((e) => {
        let lista = $(e.target).data("target")
        if($(lista).hasClass("invisible")){
            $(lista).slideDown(200)
            $(lista).removeClass("invisible")
            $(e.target).children("i").removeClass("bs-arrow-up")
            $(e.target).children("i").addClass("bs-arrow-down")
        }else {
            $(lista).slideUp(200)
            $(lista).addClass("invisible")
            $(e.target).children("i").addClass("bs-arrow-up")
            $(e.target).children("i").removeClass("bs-arrow-down")
        }
        })
    }
    const Sidebar = {
        iniciar: () => inicializar()
    }

    window.Sidebar = Sidebar
})()

export default Sidebar