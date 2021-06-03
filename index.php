<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    
    <?php 

        $testo = 'C’era una volta un corvo che, fermo su un ramo, si guardava intorno in cerca di qualcosa da mangiare.
        L’occasione arrivò presto.
        
        Non molto lontano, una famigliola stava facendo un bel picnic, e in un angolo, sopra il telo steso a terra, aveva messo un bel cesto pieno di pezzi di formaggio.
        Il corvo si lanciò in picchiata, con una rapida mossa prese un pezzo di formaggio e volò via lontano, sopra il ramo di un alto albero. Era tutto contento.
        
        Sotto il ramo dove si era posato il corvo, stava passando una volpe, che notò subito il pezzo di formaggio nel suo becco. Si sedette lì sotto e pensò: “Quanto mi piacerebbe mettere le zampe su quel pezzo di formaggio…”. Ma il corvo era su un ramo troppo alto e lei non ci sarebbe mai arrivata con un salto. Forse, però, poteva farcela usando la sua astuzia. Si sa, le volpi sono molto furbe.
        
        – Buongiorno signor corvo, ma che belle penne che hai! – disse la volpe.
        Il corvo, sentendo queste parole, guardò giù e la vide. Conoscendo il tipo, il corvo si fece subito sospettoso. “Come mai la volpe mi fa questi complimenti?” si chiese; ma la volpe continuò:
        – Hai anche un gran bel portamento!
        
        Al corvo iniziò a piacere tutta questa adulazione. “Be’, effettivamente ho delle bellissime penne nere” pensò, e iniziò a sbattere le ali per metterle bene in mostra.
        – E che bel becco che hai, sembra proprio il becco di un re!
        Al corvo non pareva vero di ricevere tanta attenzione. Sentir lodare il suo becco, poi, era una cosa bellissima.';

        $parolaCensurata = $_GET['parolaCensurata'];
    
    ?>

    <h1>FAVOLA</h1>
    <hr>

    <p><?php echo $testo ?></p>
    <h2>Il testo è lungo: <?php echo strlen($testo) ?></h2>
    <hr>

    <h1>TESTO MODIFICATO</h1>
    <p><?php echo str_replace($parolaCensurata, '***', $testo) ?></p>



</body>
</html>