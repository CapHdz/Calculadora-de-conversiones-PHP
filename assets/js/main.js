function cargarUnidades() {
    var tipo = document.getElementById("tipo").value;
    var unidades_origen = document.getElementById("unidad_origen");
    var unidades_destino = document.getElementById("unidad_destino");

    unidades_origen.innerHTML = "";
    unidades_destino.innerHTML = "";

    var unidades = obtenerUnidades(tipo);

    for (var i = 0; i < unidades.length; i++) {
        var option = document.createElement("option");
        option.value = unidades[i];
        option.text = unidades[i];
        unidades_origen.add(option);
    }

    for (var i = 0; i < unidades.length; i++) {
        var option = document.createElement("option");
        option.value = unidades[i];
        option.text = unidades[i];
        unidades_destino.add(option);
    }
}

function obtenerUnidades(tipo) {
    switch (tipo) {
        case "masa":
            return ["gramos", "kilogramos", "toneladas", "onzas", "libras"];
        case "volumen":
            return ["mililitros", "litros", "metros_cubicos", "galones", "pulgadas_cubicas"];
        case "moneda":                     
            return ["dolares", "euros", "libras", "yenes", "yuanes"];                 
        case "tiempo":                     
            return ["segundos", "minutos", "horas", "dias", "semanas"];   
        case "longitud":                     
            return ["centimetros", "metros", "kilometros", "pulgadas", "yardas"];      
            case "datos":                     
            return ["bits", "bytes", "kilobits", "kilobytes", "megabytes"];        
        default:
            return [];
    }
}

cargarUnidades();