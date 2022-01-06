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
        let str=''
        for(let obj of data)
            str+=`<tr><td>${obj.id}</td><td>${obj.cím}</td><td>${obj.szerző}</td><td>${obj.kategoria_id}</td>
                  <td class="btn btn-danger" id="${obj.id}" onclick="del(this)">Torles</td></tr>`
        
        document.querySelector('tbody').innerHTML=str
    }

    function del(obj){
        fetch(`../server/torolm.php?id=${obj.id}`)
            .then(response=>response.text())
            .then(data=>console.log(data))
            
    }

</script>