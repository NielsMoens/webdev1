<section><h1>Brielpoort, Deinze <span class="badge">3 beschikbare vaccins</span></h1>


<p>
    Lucien Matthyslaan 9<br>
    9800 Deinze</p>


<h2>Reserveer een vaccin</h2>


<form method="post" action="<?= URI ?>vaccin/order">
    <label for="claimer">
        <span>Naam</span>
        <input type="text" name="claimer" id="claimer" required>
    </label>
    <label for="email">
        <span>E-mail</span>
        <input type="email" name="email" id="email" required>
    </label>
    <label for="phone">
        <span>GSM nr.</span>
        <input type="text" name="phone" id="phone" required>
    </label>
    <label>
        <span></span>
        <div><button type="submit" class="btn btn-primary" name="claim">Reserveren</button>
        <a href="<?= URI ?>vaccin/detail">Annuleren</a>
        </div>
    </label>
</form>


</section>
