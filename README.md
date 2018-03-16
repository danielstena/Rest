http://danielstena.wieg17.se/rest/

<!-- KVAR ATT GÖRA:
1. Fixa så att det inte sparas nått när man inte fyller i något.
2. Fixa så att man inte kan gå direkt in på delete och view.php. 
3.LÄGG TILL BILDER

 -->

UPPGIFTEN 
Målet med uppgiften är att bygga ett enkelt REST API för sitt horoskop. Ni ska minst använda följande php filer i ert projekt: 
-----------------------------------------------------------------
addHoroscope.php sidan ska bara gå att begära via POST,  den ska kolla efter ett födelsedatum i $_POST, räkna ut vilket horoskop födelsedatumet tillhör och spara det i $_SESSION. 
Om ett horoskop redan finns sparat ska det inte skrivas över. Om det inte gick att räkna ut horoskopet ska ingenting sparas.

-----------------------------------------------------------------
viewHoroscope.php sidan ska bara gå att begära via GET, den ska kolla om ett horoskop finns sparat i $_SESSION och i så fall skriva ut det i output. Annars ska sidan inte skriva ut någonting.
-----------------------------------------------------------------
updateHoroscope.php sidan ska bara gå att begära via PUT,  den ska kolla efter ett födelsedatum i PUT datan, det finns ingen inbyggd $_PUT men ni kan skapa den själva genom att köra denna raden längst upp i filen:parse_str(file_get_contents("php://input"), $_PUT);räkna ut vilket horoskop födelsedatumet tillhör och uppdaterade det sparade horoskopet som finns i $_SESSION och skriva ut true.Om inget horoskop finns i $_SESSION ska sidan inte uppdatera något och skriva ut false
-----------------------------------------------------------------
deleteHoroscope.php sidan ska bara gå att begära via DELETE,  den ska ta bort det sparade horoskopet i $_SESSION och echo:a true. Om inget finns sparat ska den echo:a false.

-----------------------------------------------------------------
index.html  OBS: INTE EN PHP FIL 
index sidan ska innehålla ett område (en div) där det ens horoskopet skrivs ut när sidan laddas. 


Den ska dessutom innehålla en input för en ens födelsenummer och tre knappar:knapparna ska ha varsin onClick som kör varsin Javascriptfunktion:Knapp: "spara mitt horoskop"  onClick: ska göra ett anrop via fetch eller $.ajax till addHoroscope.php med innehållet i input:en.

Efter anropet,  ska innehållet i div:en uppdateras.

Om ni vill ha stilpoäng så ska denna knapp bara synas om horoskopet inte är sparat ännu, eller annars inaktiveras - detta är inget krav Knapp: 


"uppdatera mitt horoskop"  onClick: ska göra ett anrop via fetch eller $.ajax till updateHoroscope.php med innehållet i input:en. 

Efter anropet ska innehållet i div:en uppdateras


Om ni vill ha stilpoäng så ska denna knapp inte synas eller vara inaktiverat om horoskopet inte är sparat ännu - detta är inget krav


Knapp: "radera mitt horoskop"  onClick: ska göra ett anrop via fetch eller $.ajax till deleteHoroscope.php. Efter anropet ska innehållet i div:en uppdateras om horoskopet togs bort.

Om ni vill ha stilpoäng så ska denna knapp inte synas eller vara inaktiverat om horoskopet inte är sparat ännu - detta är inget krav

När man först går ut på sidan ska även div:en uppdateras via ett anrop till viewHoroscope, det är smart att spara detta anrop i en funktion och anropa det i slutet av varje knapps onClick funktion.
<!-- KLAR -->