<?php
    header('content-type: text/css');
    $bgCollor = 'rgb(46, 156, 79)'
?>

:root{
    --fontCollor: lime;
}

html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
}

body {
    background-color: <?=$bgCollor?>;
    color: var(--fontCollor);
}

form {
    margin: 16px;
    text-align: center;
}

.row {
    display: flex;
    flex-direction: row;
    padding: 4px;
}

.col {
    padding: 4px;
    display: flex;
    flex-direction: column;
}