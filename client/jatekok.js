fetch('../server/readjatekok.php')
    .then(response=>response.json())
    .then(data=>renderjatekok(data))

    function renderjatekok(data){
        console.log(data)
        let str=''
        for(let obj of data)
            str+=`<tr><td>${obj.cím}</td><td>${obj.szerző}</td></tr>`
        
        document.querySelector('tbody').innerHTML=str
    }

//-----legördülő listák-----

fetch('../server/readkategoriak.php')
    .then(response=>response.json())
    .then(data=>renderkategoriak(data))

    function renderkategoriak(data){
        let opStr = '';
        for(let obj of data){
            opStr+=`<option value="${obj.id}">${obj.kategoria}</option>`
        }
        document.getElementById('kategoriak').innerHTML = opStr
    }

//-----Szűrés-----

document.getElementById('kategoriak').addEventListener('change',myFilter)

function myFilter(e){
    console.log(e.target.value)
    fetch(`../server/jatekokfillter.php?id=${e.target.value}`)
        .then(response=>response.json())
        .then(data=>renderjatekok(data))
}

//-----Újra mutassa az összes játékot-----

function showall(){
    fetch('../server/readjatekok.php')
    .then(response=>response.json())
    .then(data=>renderjatekok(data))

    function renderjatekok(data){
        console.log(data)
        let str=''
        for(let obj of data)
            str+=`<tr><td>${obj.cím}</td><td>${obj.szerző}</td></tr>`
        
        document.querySelector('tbody').innerHTML=str
    }
}