<?php

/* @var $this yii\web\View */

$this->title = 'Zgadywanka';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Witaj!</h1>

        <p class="lead">Ta gra to zgadywanka, polegająca na zgadnięciu liczby wylosowanej przez komputer (1-100).</p>
        <p class="lead">Wpisz liczbę poniżej, aby spróbować.</p>

        <form method="get" action="">
            <p><input type="number" class="form-control" placeholder="Zgadywana liczba" autocomplete="off" min="1" max="100" id="number-guessing"></p>
            <p><a class="btn btn-lg btn-success">Zgadnij</a></p>
        </form>
    </div>
</div>
