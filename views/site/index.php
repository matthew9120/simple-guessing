<?php

/* @var $this yii\web\View */

$this->title = 'Zgadywanka';
?>
<div class="site-index">

    <div class="jumbotron">
        <p class="bg-danger" id="error-paragraph"></p>
        <p class="bg-success" id="success-paragraph"></p>
        <h1>Witaj!</h1>

        <p class="lead">Ta gra to zgadywanka, polegająca na zgadnięciu liczby wylosowanej przez komputer (1-100).</p>
        <p class="lead">Wpisz liczbę poniżej, aby spróbować.</p>

        <form method="get" action="#">
            <p><input type="number" class="form-control" placeholder="Zgadywana liczba" autocomplete="off" min="1" max="100" id="ng-text-field"></p>
            <p><a class="btn btn-lg btn-success" id="ng-accept-button">Zgadnij</a></p>
        </form>
    </div>
</div>
