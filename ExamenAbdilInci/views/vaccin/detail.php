<section><h1><?= $vaccin->name?><span class="badge">3 beschikbare vaccins</span></h1>


    <p>
    <?= $vaccin->street . ' ' . $vaccin->nr?><br>
    <?= $vaccin->postalcode . ' ' . $vaccin->city?>    </p>

    
    <h2>3 beschikbare vaccins</h2>
    <div class="list">
            <div class="list-item">
        <span class="name">Vaccin <label>#9 beschikbaar tot</label> vrijdag 15 januari 18:00</span>
        </div>
            <div class="list-item">
        <span class="name">Vaccin <label>#10 beschikbaar tot</label> vrijdag 15 januari 18:00</span>
        </div>
            <div class="list-item">
        <span class="name">Vaccin <label>#11 beschikbaar tot</label> vrijdag 15 januari 18:00</span>
        </div>
        </div>
    <a href="<?= URI ?>vaccin/order" class="btn btn-primary">Ik wil er een</a>
    

<a href="<?= URI ?>vaccin/index">Terug naar alle vaccinatiecentra</a></section>
