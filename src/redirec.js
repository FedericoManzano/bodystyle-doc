import $ from "jquery";

(function() {

    const inicializar = () => {
        $(".documentacion").click((e) => {
           
            let carga = $("<div class='carga'></div>")
            $(".nav").append(carga)
            
            const proxyurl = "https://cors-anywhere.herokuapp.com/";
            
            const url = $(e.target).data("target")
            console.log(url)
            fetch(proxyurl +url)
            .then(response => {
               $(carga).remove()  
               window.location.href = url;      
            })
            .catch(() => console.log("Can’t access " + url + " response. Blocked by browser?"))
            
        })
    }
    const Redir = {
        iniciar: () => inicializar()
    }

    window.Redir = Redir
})()

export default Redir