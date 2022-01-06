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

    <div class="row justify-content-center pt-2">
        <div class="col-md-3">
             <select id="kategoriak" class="custom-select bg-secondary text-dark"></select><br>
             <button type="button" class="btn btn-light mt-2" onclick="showall()">Összes</button>
        </div>
        <div class="col-md-9">
            <table class="table table-dark">
                    <thead class="headd text-center bgb">
                        <th>Játék neve</th>
                        <th>Fejlesztők</th>
                    </thead>
                    <tbody></tbody>
                </table>
        </div>
</div>
<script src="jatekok.js">

</script>