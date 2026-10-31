Laddningstid och användarvänlighet
===============================

För denna analysen har Google Pagespeed[^1] använts för att få fram
vilket värde en sida har från 1 - 100 där 100 är en utmärkt sida där inga
förbättringar behövs. Mätverktyget listar även de förbättringar som behövs göras
för att få ett högre betyg. Det är de som denna analys har utgått ifrån. För att
kunna mäta sidornas resurinladdning, tid och datamängd användes Chromes programmeringsverktyg
under "Network" tabben.
Själva tiden för laddning av respektive sida har värdet för "Load" använts och inte
"Finished". Detta eftersom finished kan pågå hur länge som helst då olika resurser
kan laddas in efter att sidan har laddat färdigt och ger därmed en längre sidladdning.
Detsamma gäller för "request" och storleken för nerladdning där en godtycklig tid har väntats efter att sidan
angetts som "Load" för att se hur många resurser som har laddats. Denna tiden uppskattas
till runt 4-5 sekunder.

Själva valet av sidor blev den här gången mellan tre olika sidor för hobbyfixaren.
Biltema[^2], Harald Nyborg[^3] och Clas Ohlson[^4]. Detta valet gjordes för at se
vilken av dem som är bäst optimerad och är snabbast att komma igång för att söka efter
produkter. Valet av att ta själva förstasidan, sidan för kundservice och en sökning på
produkten skruv gjordes för att det var de sidor som i utformning är bland de mest
liknande mellan de olika webbplatserna.

När det kommer till vilket värde som är satt som en snabb sida har det valts allt
under 2,0 sekunder är en snabb sida och under 3,5 sekunder är helt acceptabelt.
Medans allt över är för långsamt på dagens webbplatser. Tiden som diskuteras är när
användaren söker efter en vara.


Via Googles kalkylark finns
[rådata](https://docs.google.com/spreadsheets/d/1I-nCA3TJTL-cEdwwd-06KC4TEUtnxe7iq49uYLFiN-w/edit?usp=sharing)
tillgänglig.

##Biltema
[FIGURE src="image/Biltema.jpg?w=615" class="center"]
[Biltema](http://www.biltema.se/sv/) är en sida som är bra för det mesta inom hobby
och fritid. De säljer det mesta som är nödvändigt när det kommer till verktyg,
skruvar, lim, cykeltillbehör mm. Själva hemsidan är lättnavigerad och ger bra förslag
vid sökningar. Den visar även relaterade produkter på det besökaren tittar på.

###Mätresultat
Själva resultatet från Google Pagespeed har givet en blandning ifrån 65 upp till 89.
Detta beror till största del på hur många bilder en sida innehåller. Eftersom
förstasidan innehåller fler bilder än de andra så har den ett sämre värde. Det som
behövs göra mest är att komprimera bilderna för att ge en snabbare laddningstid.
Detsamma gäller för cachelagring som hade gett en betydligt mindre datamängd att
ladda ner för varje bild. Det är därför både kundservice och om-sidan har bättre
värden då de inte innehåller lika många sidor.

Tiderna för varje sida varierade också en del. Detta beror förmodligen också på
bilderna. Eftersom en bild innehåller så pass mycket data jämfört med text ger detta
en längre tid att ladda, vilket också medför en större mängd data som ska laddas ner.
När det kommer till antal resurser som ska laddas är det bilderna som sätter ett
högre värde. Det som är lite märkligt är att endast fem bilder kunde hittas vid
första anblick på om-sidan. Dock är det totalt cirka 42 resurser som laddas.

För att dra ner på antal resurser hade de kunnat slå ihop ett flertal JavaScript
och ersatt en del bilder som används till ikoner med ren fontrendering. Detta hade
givit en mindre antal resurser som ska laddas och kanske gjort sidan något snabbare.

Vid en sökning låg medelvärdet för att ladda klart sidan på 2,34s. Detta är helt acceptabelt
men skulle mycket väl gå att snabba upp med olika förbättringar för bilderna.

##Clas Ohlson
[FIGURE src="image/Clas-Ohlson.jpg?w=615" class="center"]
[Clas Ohslon](https://www.clasohlson.com/se/) är den sida som har den bästa användarvänligheten
då det är lätt att hitta olika produkter samt lätt att filtrera efter eget behov.

###Mätresultat
Resultatet för denna webbplatsen var rätt dåliga och gav precis acceptabelt värde
för datoranvändare när man söker på saker samt titta på om-sidan. Den högsta värdet
var 81 och lägsta 56. Detta kan ha att
göra med precis som Biltema att förstasidan innehåller en hel del bilder. Precis
som Biltema lider denna webbplatsen av att inte kunna rendera något innan vissa
nödvändiga resurser har laddats in. Detta medför en längre tid innan användaren
kan läsa på sidan.

Något som verka vara ett förbisedd del är att förminska både JavaScript och CSS.
Det hade medfört en minskad storlek på filerna samt en kortare tid att tolka.

Vid en sökning tog det i snitt 3,23s för att ladda klart vid en sökning på en vara.
Detta är en bit över vad som anses acceptabelt för denna analysen och hade kunnat kortast ner en
aning.


##Harld Nyborg
[FIGURE src="image/Harald-Nyborg.jpg?w=615" class="center"]
[Harald Nyborg](https://www.harald-nyborg.se/) är precis som Biltema en bra sida
när det kommer till sökning men är något långsammare och det märks att bilderna
tar tid att ladda in.

###Mätresultat
Mätningen gav väldigt dåligt resultat, så lågt som 37 och bara upp till 72. Återigen
den största behovet som behövs göras är att komprimera bilderna. Även en stor mängd
resurser laddas. Runt 200 stycken var du än befinner dig på webbplatsen. Det hade gått
att slå ihop några JavaScript för att dra ner på mängden en aning, annars består
det till största del av bilder. Även om de inte direkt visas vid första anblick så
finns det bilder gömda som visas när muspekaren är över flikarna för de olika avdelningarna.

En annan aspekt som är värd att nämna är att en stor mängd data laddas ner vid varje
sida. I snitt 4MB, vilket är rätt mycket med tanke på de tidigare sidorna som låg
på cirka 1 - 2,5MB. Detta har återigen förmodligen med bilder att göra eftersom
det är en stor mängd av dem som ska laddas in på sidan. Webbplatsen hade mått bättre
av att skippa bilder som inte är direkt synliga och i stället ha enbart text, samt
både komprimera och cachelagra ett flertal resurser.

Själva tiden för denna sidan låg i snitt på 5,09s. Detta är en bra bit över gränsen
och behöver åtgärdas för att få mer flyt på sidan. Som sagt komprimera bilder, men även
också minska ner svarstiden på servern.

##Sammanfattning
Den del som kan förbättras på dessa tre webbplatser är utan tvekan komprimering
av bilder. Detta är för att de till största del består av bilder och behöver därmed
ladda in rätt storlek av en bild för att spara på både utrymme och tid. Antal resurser
skulle också kunna dras ner en aning men kan vara lite problematiskt då bilderna,
som utgör en stor del, skifta från gång till gång på sidan.

Enligt "The Principles of Beutiful Web Design, Third Edition"[^5] så är det ett
klokt val att använda jpg
formatet på bilder för att få ner storleken. Nackdelen är dock att det är ett
lossy-format. Det menas att informationen i bilden blir förvrängd varje gång den
sparas om. Dessa webbsidor har använt jpg till största del med undantag för några
få ställen där png använts istället. PNG är bra då ett fåtal färger används och
man är i behov av ett lossyless-format, vilket behåller informationen intakt.

##Avslutningsvis
Denna analys av webbplatsers hastighet är genomförd av Erik Ståhlberg i kursen [Teknisk webbdesign och användbarhet](https://dbwebb.se/kurser/design). De olika mätningarna är gjorda på
det vis så att de olika webbplatserna fått en så liknande mätning som möjligt.

[^1]: Google Pagespeed. PageSpeed Insights. https://developers.google.com/speed/pagespeed/insights/ 2017-12-03.
[^2]: Biltema. Förstasidan. http://www.biltema.se/sv/ 2017-12-03.
[^3]: Harald Nyborg. Förstasidan. https://www.harald-nyborg.se/ 2017-12-03.
[^4]: Clas Ohlson. Förstasidan. https://www.clasohlson.com/se/?gclid=CjwKCAiA3o7RBRBfEiwAZMtSCWCv5W-YTHKx0zXX9ipRQR0BAIUAul69gb4HcwNQlazB-fhDtd0NvBoCUsAQAvD_BwE 2017-12-03.
[^5]: Beaird, Jason. (2014). The Principles of Beutiful Web Design. Third Edition.
SitePoint. s157-194.
