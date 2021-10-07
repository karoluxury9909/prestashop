<div class=""panel">
    <div class=""panel-heading">
        {l s='Konfigūracija' mod='mymodule'}
    </div>

        <form action="/action_page.php">

    <label for="uzdpav">Užduoties pavadinimas:</label><br>
            <input type="text" id="uzdpav" name="uzdpav" value=" "><br>

    <label for="uzdsunk">Užduoties sunkumas:</label>
        <select id="uzdsunk" name="uzduotys" form="uzdforma">
            <option value="Lengva">Lengva</option>
            <option value="Vidutiniškai sunki">Vidutiniškai sunki</option>
            <option value="Sunki">Sunki</option>
        </select>

            <input type="submit" value="Išsaugoti">

    </div>
</div>