fetch('../server/readkategoriak.php')
    .then(response=>response.json())
    .then(data=>renderSzakok(data))

    function renderSzakok(data){
        console.log(data)
        let str=''
        for(let obj of data)
            str+=`<tr><td>${obj.kategoria}</td></tr>`
        
        document.querySelector('tbody').innerHTML=str
    }

