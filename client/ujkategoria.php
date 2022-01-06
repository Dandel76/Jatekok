    <style>
        .msg{
            color:lightgreen;
        }



    </style>
    
    
    <div class="row justify-content-center pt-2">
       <form class="form-inline p-3 m-2">
                <input type="text" name="kategoria" id="kategoria" class="form-control mr-3" placeholder="írd be az új kategoria nevét" size="50">      
                <input class="btn btn-success" type="button" onclick="uj()" value="Mentés">
                <div class="msg ml-3"></div>
        </form>
    </div>

    <script>
    function uj(){
        document.querySelector('.msg').innerHTML=""

        let ujkat = document.getElementById("kategoria").value;
        console.log(ujkat);
        if(ujkat.length>0){
            fetch(`../server/ujkm.php?kategoria=${ujkat}`)
                .then(response=>response.text())
                .then(data=> document.querySelector('.msg').innerHTML=data ? "Sikeres adatbeírás" : "Hiba történt!")
        }
    }
</script>