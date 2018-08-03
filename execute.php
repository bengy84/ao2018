<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
$response = '';
if(strpos($text, "/start") === 0 || $text=="ciao")
{
	$response = "Ciao $firstname, benvenuto/a io sono il robot ufficiale dell'AO2018. Ti sarò molto utile se saprai utilizzare al meglio le informazioni che ho da darti... AO2018 per continuare";
}
elseif($text=="gallone")
{
	$response = "https://www.google.it/maps/place/40%C2%B037'08.3%22N+15%C2%B003'19.4%22E/@40.6189722,15.0532002,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d40.618972!4d15.05539";
}
elseif($text=="parodio")
{
	$response = "https://www.google.it/maps/place/40%C2%B037'08.3%22N+15%C2%B003'22.6%22E/@40.618978,15.056284,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d40.618978!4d15.056284";
}
elseif($text=="mune")
{
	$response = "https://drive.google.com/open?id=1h9mAq6UiAKLkz8wjTDb8gbO8v2oQ7tLa";
}
elseif($text=="glim")
{
	$response = "https://drive.google.com/open?id=1SvS1WrYC1pvAr4aObOlpCuggorLrOHNf";
}
elseif($text=="xolal")
{
	$response = "https://drive.google.com/open?id=1SPec2xUXn3YyXtCNVNCktFU5dIARkioY";
}
elseif($text=="sohone")
{
	$response = "https://drive.google.com/open?id=1HOpNsjX1uZN8X-682rcVXCSzlkIbCFyx";
}
elseif($text=="groupie")
{
	$response = "https://drive.google.com/open?id=1_9R5ogUd4GEyWXCuLzad3W0cBV_KjPcD";
}
elseif($text=="yule")
{
	$response = "https://drive.google.com/open?id=1oBcKPDoBPMCaYRiaY6oa_JFdnOOVi7Q0";
}
elseif($text=="ana")
{
	$response = "https://www.google.it/maps/place/40%C2%B037'11.2%22N+15%C2%B003'25.3%22E/@40.619779,15.0548503,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d40.619779!4d15.057039";
}
elseif($text=="comitato")
{
	$response = "https://www.google.it/maps/place/40%C2%B037'14.0%22N+15%C2%B003'15.8%22E/@40.620545,15.0521943,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d40.620545!4d15.054383";
}
elseif($text=="antonio abate")
{
	$response = "https://www.google.it/maps/place/40%C2%B037'19.1%22N+15%C2%B003'16.6%22E/@40.621972,15.0524213,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d40.621972!4d15.05461";
}
elseif($text=="auletta")
{
	$response = "https://www.google.it/maps/place/40%C2%B037'22.5%22N+15%C2%B003'13.5%22E/@40.622919,15.0515653,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d40.622919!4d15.053754";
}
elseif($text=="intesa")
{
	$response = "https://www.google.it/maps/place/40%C2%B036'59.1%22N+15%C2%B003'23.6%22E/@40.616414,15.0543703,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d40.616414!4d15.056559";
}
elseif($text=="ao2018")
{
	$response = "Bravo non pensavo riuscissi ad arrivare fin qui, ma ce l'hai fatta ;P Ottimo. AVVIA";
}
elseif($text=="avvia")
{
	$response = "PROVA 1
PROVA 2
	
	Scegli!";
}
elseif($text=="prova 1")
{
	$response = "Per navigare nei menu basta digitare il numero della voce desiderata
	
1.1 - Info
1.2 - Utilità
1.3 - File
1.4 - Test Finale
	
P.S.: Ricorda in qualsiasi momento puoi ritornare alla voce desiderata semplicemente digitando il numero della voce o digitare MENU per tornare all'inizio";
}
elseif($text=="1.1")
{
	$response = "Cosa succederebbe se il Sole dell’AO non tornasse a splendere ogni anno per una settimana?
Semplice, la Luna non potrebbe fare più il suo giro per illuminare di luce riflessa la notte e le stelle per il resto dell’anno. 
Alcuni demoni vogliono rubare il Sole dell'AO per conto del guardiano delle tenebre Necros.
I guardiani della luna e del sole sono ormai anziani ed hanno bisogno del tuo aiuto per proteggere il mondo dalle forze del male che vogliono oscurare il Sole.
L’AO ha bisogno del tuo aiuto. Ti designiamo guardiano del Sole e della Luna: l’impresa che ti aspetta sarà avventurosa e pericolosa, devi saper dosare la forza e l’intelligenza, con l'umiltà. Se temi di non essere all'altezza del compito...

Fai bene: NON LO SEI!!! ;DDD

Ma se ti lascerai guidare e saprai leggere i segni forse c’è una speranza…
	
MENU";
}
elseif($text=="1.2")
{
	$response = "Spero tu abbia letto le info!!! Pensa che quella ha già ispirato un film.
Qui troverai una lista di link molto utili... Guardali con attenzione
	
1.2.1 - Link 1
1.2.2 - Link 2
1.2.3 - Link 3";
}
elseif($text=="1.3")
{
	$response = "Qui troverai dei file molto utili e anche qualche file meno utile ;P Sta a te scoprirlo!!!

1.3.1 - File 1
1.3.2 - File 2
1.3.3 - File 3";
}
elseif($text=="1.2.1")
{
	$response = "https://it.wikipedia.org/wiki/Mune_-_Il_guardiano_della_luna";
}
elseif($text=="1.2.2")
{
	$response = "https://www.antoniogenna.net/doppiaggio/film1/mune.htm";
}
elseif($text=="1.2.3")
{
	$response = "https://openload.co/f/YVrSgNHKg7Y/";
}
elseif($text=="1.3.1")
{
	$response = "https://drive.google.com/uc?export=download&id=1eX_1ui_na5__83RASVxObnsC88N_IGDq";
}
elseif($text=="1.3.2")
{
	$response = "https://drive.google.com/uc?export=download&id=11k4M0X3S1JRFrRvvrOjzAYKwW7LkpYf9";
}
elseif($text=="1.3.3")
{
	$response = "https://drive.google.com/uc?export=download&id=1UYz8z4ZQPUOoMMgtdXywtIxYhk4Z6IMQ";
}
elseif($text=="1.4")
{
	$response = "Se sei arrivato qui vuol dire che hai già visionato e studiato tutte le altre voci...

Per esserne sicuro potrai procedere solo dopo aver inserito il link della pagina dove sono presenti le citazioni e le curiosità riportate in un file della sezione File.

Sicuramente già la conosci ;D Ma voglio comunque darti una mano:
	
- Il sito dove è ubicata la pagina è molto silenzioso
	
- La parte finale del link è
/citazioni-curiosita
	
Dovrebbe essere veramente facile per te ormai. :DDD";
}
elseif($text=="https://www.silenzioinsala.com/3028/mune-il-guardiano-della-luna/citazioni-curiosita")
{
	$response = "Bravooo... Non pensavo potessi arrivare fin qui... Ma per essere sicuro che non sia stata solo fortuna voglio farti un'ultima domanda:
	
Al minuto 53:20 qualcuno dice <Calmati. Sta Calmo!>

Qual'è il nome del suo doppiatore italiano?";
}
elseif($text=="davide perino")
{
	$response = "NON CI POSSO CREDEREEEE O_o

Adesso ti basta far scrivere al tuo caposquadra nel gruppo Facebook AnimatoriAO2018
	
Abbiamo capito tutto!!a!
La squadra <COLORE> dichiara:
IL COMITATO REGNA!!!
<INIZIALI DEI 2 CAPI SQUADRA>

Scrivi queste 4 righe per terminare la prova.

P.S.: Ovviamente <COLORE> va sostituito con il vostro colore e <INIZIALI DEI 2 CAPI SQUADRA> con le iniziali dei capi squadra!

Perfetto la prima prova è terminata!!! A presto!!! ;P";
}
elseif($text=="prova 2")
{
	$response = "Ben tornato! Ti stavo aspettando... Durante la tua assenza i 2 scagnozzi al servizio del guardiano delle tenebre sono quasi riusci a spegnere il sole. 
Adesso tocca a te! Devi in tutti i modi trovare una soluzione... Per fortuna quei 2 sono un pò stupidi... Ma come si chiamano?";
}
elseif($text=="mox e spleen")
{
	$response = "E' veroooo!!! Comunque quei 2 non la voglio proprio finire... Ma ancora niente è perduto grazie a te tutto si può salvare!!!
D'ora in poi dipenderà tutto dalla tua intelligenza e dalla tua astuzia... (allor stamm' n'guaiat :DDD) Ma voglio fidarmi di te in ogni caso!!!
Ovviamente anche il guardiano delle tenebre è sulle nostre tracce... Quindi ottenere le informazioni non sarà facile... 
Adesso tutto quello che ti serve per proseguire è conoscere l'età dell'AO, ma questo sono sicuro che già lo sai! Prima di andare avanti guarda questa immagine:

https://www.tuttoapp-android.com/wp-content/uploads/2015/01/Applicazione-inutile.jpg";
}
elseif($text=="25")
{
	$response = "https://drive.google.com/open?id=1zCavxUhchlJZgX5ymA6l7NG1X3KnQOwm

Fai attenzione alla risposta. Potresti ricevere informazioni errate!!!";
}
elseif($text=="a")
{
	$response = "Se su un biliardo ci sono due biglie davanti a due biglie
e due biglie dietro a due biglie, qual è il numero minimo
di biglie presenti?";
}
elseif($text=="4")
{
	$response = "Cinque persone (A, B, C, D, E) decidono di scambiarsi
i regali di Natale di modo che ciascuno faccia un regalo
a due persone e ne riceva da altre due persone. A fa un
regalo a B e C; D fa un regalo a B e a una delle due persone
che ricevono il regalo anche da E; C fa un regalo a
D e alla stessa persona che riceve il regalo anche da B.
Da chi riceve i regali E?
(scrivi la risposta senza spazi)";
}
elseif($text=="bc")
{
	$response = "Cinque giovani scultori frequentano un’Accademia. I loro
nomi sono Alberto, Luigi, Carla, Davide e Giulia. Le loro
statue raffigurano: Giove, Venere, Bacco, Nettuno e Minerva,
non necessariamente in quest’ordine. Ognuno di
loro utilizza uno solo dei seguenti materiali: marmo, argilla,
gesso, bronzo e legno, non necessariamente in quest’ordine.
Si sa inoltre che:
1. Carla ha realizzato una statua in legno;
2. Davide ha realizzato una statua in argilla;
3. la statua in gesso raffigura Venere;
4. un ragazzo ha realizzato una statua in bronzo che raffigura
Giove;
5. Luigi ha realizzato una statua raffigurante Nettuno.

Chi ha realizzato la statua in bronzo?";
}
elseif($text=="alberto")
{
	$response = "Bravooo!!! Ti sei meritato questo premio...
	
https://drive.google.com/uc?export=download&id=1xHBjOKxKd7TC1TXJrzChz3iqaSL6GnxZ 

La prossima settimana Antonella deve incontrare: Lucrezia,
Rita, Maria, Patrizia, Carlo e Silvia e ha a disposizione
solo le sere di lunedì, martedì e mercoledì. Antonella
decide quindi di incontrare due amici ogni sera.
Per organizzare gli appuntamenti si deve, però, ricordare
che: I) Rita e Silvia non vogliono incontrarsi
tra di loro; II) Patrizia non può uscire il lunedì sera;
III) Carlo può solo il mercoledì sera; IV) Maria e Lucrezia
escono solo insieme. In base alle precedenti affermazioni,
per poter incontrare tutti e sei gli amici,
quale incontrerà sicuramente il
martedì?

Bravo hai conquistato un prezioso aiuto!!! Se riuscirai a trovarolo?!?!? ;PPP Mi raccomando conservalo con cura è molto importante!!! A prestoooo!!!";
}
else
{
	$response = "Comando non valido! Ma non pretendevo di più da te... ;P

AVVIA per procedere!";
}
$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
