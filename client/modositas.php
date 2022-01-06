<style>
    .headd{
        color: lightgreen;
    }

    h1{
        text-align:center;
    }

    table{
        max-width: 600px;
    }

    .bgb{
        background: black;
    }


</style>

</style>

    <div class="row justify-content-center pt-2">
             <table class="table table-dark">
                 <thead class="headd text-center bgb">
                    <th>ID</th>
                    <th>Cím</th>
                    <th>Szerző</th>
                    <th>Kategória ID</th>
                    <th>&nbsp;</th>
                 </thead>
                 <tbody></tbody>
            </table>
</div>
<script>
fetch('../server/readjatekok.php')
    .then(response=>response.json())
    .then(data=>renderJatekok(data))

    function renderJatekok(data){
        console.log(data)
        let tblString=''
        for(let obj of data)
            tblString+=`<tr><td>${obj.id}</td><td class="border border-success" contenteditable>${obj.cím}</td><td class="border border-success" contenteditable>${obj.szerző}</td><td class="border border-success" contenteditable>${obj.kategoria_id}</td>
                  <td class="btn btn-success" id="${obj.id}" onclick="update(this)">Modositas</td></tr>`
        
        document.querySelector('tbody').innerHTML=tblString
    }

    function update(obj){
        let e = obj.parentNode.childNodes;
        //console.log(obj.parentNode.childNodes[0].innerHTML)
        let id = e[0].innerHTML
        let cím = e[1].innerHTML
        let szerző = e[2].innerHTML
        let kategoria_id = e[3].innerHTML
        fetch(`../server/updatem.php?id=${id}&cím=${cím}&szerző=${szerző}&kategoria_id=${kategoria_id}`)
            .then(response=>response.text())
            .then(data=>console.log(data))
            
    }
</script>