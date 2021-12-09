fetch('../server/readjatekok.php')
    .then(response=>response.json())
    .then(data=>renderSzakok(data))

    function renderSzakok(data){
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
            opStr+=`<option>${obj.kategoria}</option>`
        }
        document.getElementById('kategoriak').innerHTML = opStr
    }

    document.getElementById('kategoriak').addEventListener('change',myFilter)

    function myFilter(e){
        console.log(e.target.id)
        console.log(e.target.value)
       fetch(`../server/readjatekok.php?${e.target.id}=${e.target.value}`)
            .then(response=>response.json())
            .then(data=>renderTable(data))
    }

    function renderTable(data){
        let strk=''
        for(let obj of data)
            strk+=`<tr><td>${obj.cím}</td><td>${obj.szerző}</td></tr>`

            document.querySelector('tbody').innerHTML=strk
    }