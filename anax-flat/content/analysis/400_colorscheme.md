Färganalys
===============================

I detta kapitel görs en analys av tre olika webbsidor. Färg och typsnitt är själva
fokusområdet och en fördjupning om varför de olika webbplatserna har gjort de
valen de har gjort. När analyserna har gjorts har de utgått till största delen
ifrån boken "The Principles of Beutiful Web Design, Third Edition"[^1]. Valet av
sidor är sådana jag personligen är på i stort sett varje dag och som jag finner
uppfylla sina krav för en bra webbplats. För att få reda på färgerna
för varje sida har jag använt ett plugin vid namn ColorZilla[^8] till Chrome. För
själva typsnitten använder jag ett plugin vid namn WhatFont[^10] till Chrome.

----------------

##Youtube
[FIGURE src="image/Youtube.jpg?w=615" class="center"]
[FIGURE src="image/Youtube-dark.jpg?w=615" class="center"]
En av de största sidorna som finns på nätet är i särklass [Youtube](https://www.youtube.com/)[^2]. Något man lägger
märke till direkt är deras logotype uppe i vänstra hörnet. Det finns två varianter att välja mellan då den ena är ljus och den andra mörk.

###Färgschema
<table style="border-spacing: 4px; border-collapse: separate;">
    <tbody>
        <tr style="float: left; margin-right: 50px;">
            <td style="height: 50px; width: 50px; background-color: #fafafa"></td>
            <td style="height: 50px; width: 50px; background-color: #323232"></td>
            <td style="height: 50px; width: 50px; background-color: #ff0000"></td>
            <td style="height: 50px; width: 50px; background-color: #969696"></td>
        </tr>
        <tr style="float: left">
            <td style="height: 50px; width: 50px; background-color: #323232"></td>
            <td style="height: 50px; width: 50px; background-color: #fafafa"></td>
            <td style="height: 50px; width: 50px; background-color: #ff0000"></td>
            <td style="height: 50px; width: 50px; background-color: #8C8C8C"></td>
        </tr>
    </tbody>
</table>
I det vänstra färgschemat visas för den ljusa version och den högra för den mörka.
Den största skillnaden är att bakgrundsfärgen har skiftat plats med förgrunden.

Eftersom Youtube är en sida där alla kan ladda upp videos, inom deras lagliga gränser,
så behövs en sida som är väldigt neutral. För att kunna dra till sig blicken har
de valt att använda färgen rött som är en väldigt intensiv färg[^1] och som sticker
ut väldigt bra mot bakgrunden vilket är vit. Själva sidan i sig är uppbyggd med ett
**monokromt** färgschema med undantag för det röda som är deras **accentfärg**.
Det som får sidan att stå ut med olika färger är olika användares upplägg av videos.
Där en ögonblicksbild visas i ett gridsystem. Dock är det lite märkligt att en sådan pass stor hemsida som denna
har dålig kontrast mellan text/symboler och bakgrunden. Enligt en koll på [kontrasten](https://snook.ca/technical/colour_contrast/colour.html)[^3]
mellan den ljusa grå, som används till symboler och text, mot den vita bakgrunden
ger detta en dålig kontrast. Detta innebär att det kan vara svårt att urskilja mot bakgrunden.

Det går dock att byta mellan ett mörkt och ett ljust tema. Det kan vara av olika
anledningar användaren önskas ha en mörkare bakgrund än ljus. Personligen föredrar
jag en mörkare bakgrund då det inte påfrestar ögonen lika mycket som den ljusa.
Eftersom Youtube inte är till för att läsa en stor del text utan titta på videos
så är läshastigheten inte en överdrivet stor del[^6].


###Typografi
Den överlägets mest använda fonten för denna sidan är "Roboto". Som är en simpel
och tydligt typsnitt, vilket alla i stort sett kan läsa. Eftersom sidan har så pass
mycket besökare från olika typer av ursprung när det kommer till läsande så är detta
ett smart val. Roboto är av typen sans-serif och klassificeras som neo-grotesque[^9].
Vilket är en modernare variant av grotesque och innehåller i större delen väldigt enkla
och tydliga typsnitt, som till exempel Roboto. För att ha något att falla tillbaka till
så används Ariel. Ariel används också till vissa symboler som inte finns med i Roboto.

------

##Feber
[FIGURE src="image/Feber.jpg?w=615" class="center"]
[Feber](http://feber.se/)[^4] är en populär sida för teknikintresserade inom Sverige
som ägs av [Bonnier AB](https://www.bonnier.com/sv/)[^5]. Det är en sida jag personligen
är inne nästintill varje dag. Den agerar som en nyhetssida för olika teknikområden.
De listar sina artiklar i ett långt flöde som läggs till på toppen varje gång en
ny artikel finns tillgänglig.

###Färgschema
<table style="border-spacing: 4px; border-collapse: separate;">
    <tbody>
        <tr>
            <td style="height: 50px; width: 50px; background-color: #333333"></td>
            <td style="height: 50px; width: 50px; background-color: #FFFFFF"></td>
            <td style="height: 50px; width: 50px; background-color: #222222"></td>
            <td style="height: 50px; width: 50px; background-color: #5D6265"></td>
            <td style="height: 50px; width: 50px; background-color: #4EBBE8"></td>
            <td style="height: 50px; width: 50px; background-color: #05659C"></td>
            <td style="height: 50px; width: 50px; background-color: #F7520C"></td>
        </tr>
    </tbody>
</table>

Precis som med den mörka versionen av Youtube använder Feber sig också av en mörkare färgschema.
Det som dock skiljer dem åt väldigt mycket är
att en vit bakgrund används för varje artikel. Detta kan ha att göra med att vit bakgrund
med mörk text är lättare att läsa än tvärtom[^6]. Den mörka delen används i stort
sett bara där det förekommer mycket "whitespaces" eller delar av mindre betydelse
än artiklarna.

Det som är lite intressant för denna sidan är att det är två **accentfärger** i form
av orange och ljusblå. Vilket i sin tur agerar som komplement mot varandra. I övrigt
är sidan **monokromt** färgsatt med olika nyanser av mörkgrått.

###Typografi
Till rubriker används SuisseBold och SuisseLight i första hand, följt av HelveticaNeue-Bold, Helvetica
Neue Bold och Roboto Black. Denna font är at typen sans-serif. Dock till själva brödtexten
används Arial medans i vissa mindre områden används Helvetica. Dessa områden kan vara
kategorien på artikeln eller vilken etikett den har. När det kommer till skillnaden mellan
Helvetica och Arial är den ytterst liten i normal form, vilket används på sidan. Därför
har jag svårt att se anledningen till två olika fonter som är snarlika varandra.
I boken "The Principles of Beutiful Web Design" så avråder författarna att använda
två liknande sans-serif eller två liknande serif fonter i samma webbplats. Suisse
fonterna är lite större skillnad på än de andra och har en enklare och klara design
för att dra till sig uppmärksamheten först.

--------------

##Internet Movie Database (IMDb)
[FIGURE src="image/IMDB.jpg?w=615" class="center"]
[IMDb](http://www.imdb.com/)[^7] är en populär sida för de som gillar att titta på
film och serier. Det som gör denna sida så pass stor är urvalet av filmer och serier
som finns tillgänglig att läsa om. Personligen använder jag den till att söka upp
filmer och serier innan jag börja titta, för att se om den är något att lägga tid på.

###Färgschema
<table style="border-spacing: 4px; border-collapse: separate;">
    <tbody>
        <tr>
            <td style="height: 50px; width: 50px; background-color: #B8B8B4"></td>
            <td style="height: 50px; width: 50px; background-color: #E3E2DD"></td>
            <td style="height: 50px; width: 50px; background-color: #F0F0F0"></td>
            <td style="height: 50px; width: 50px; background-color: #575757"></td>
            <td style="height: 50px; width: 50px; background-color: #333333"></td>
            <td style="height: 50px; width: 50px; background-color: #136CB2"></td>
            <td style="height: 50px; width: 50px; background-color: #E1B52B"></td>
        </tr>
    </tbody>
</table>

Det mest uppenbara på sidan är själva logotypen som har **accentfärgen** av mörk gul,
nästan orange. Precis som de förra sidorna är texten på vit bakgrund, men dock inte
överallt. Själva ovandelen där sökfältet finns är det tvärtom. Detta ger en unik
stil som är lätt att hitta på sidan. Feber har ett liknande sätt att visa var själva
navigeringen av sidan finns. Eftersom större delen av texten är i blått, indikerar
länkar, och den gula färgen används lite här och var så är den mer **analog** än
**monokrom** i färgsättningen för texten men **monokrom** i övrigt. Istället för
att ha en enda färg till "whitespaces" har en toning använts för att ge lite mer
liv i sidan än bara en ren och skär informationssida, där det ofta är svart text
på helvit bakgrund.

###Typografi
På denna webbplatsen har utformningen vänts lite när det kommer till fonter. Istället
för att använda Arial till brödtext används här istället den till Rubriker. Till
själva brödtexten används istället Verdana. Båda är av typen sans-serif. Återigen
ser jag ingen anledning till att ha två snarlika sans-serif typsnitt på samma
sida. Känns som det hade varit bättre att ha en serif-stil på rubrikerna för att locka
användaren till dem först.

##Avslutningsvis
Denna analys av webbplatser är genomförd av Erik Ståhlberg i kursen [Teknisk webbdesign och användbarhet](https://dbwebb.se/kurser/design). Eftersom både färger
och typsnitt är mer av den estetiska aspekten av en webbsida kan de uppfattas olika
av olika personer. Det som är skrivit i analysen är ur mitt eget perspektiv och är
nödvändigtvis inte rätt i bedömning av en webbplats.

[^1]: Beaird, Jason. (2014). The Principles of Beutiful Web Design. Third Edition.
SitePoint. s54-57, s123-156.
[^2]: Youtube. Youtube förstasida. 2017-11-27. https://www.youtube.com/ 2017-11-27.
[^3]: Snook. Colour Contrast Check. 2015-01-11. https://snook.ca/technical/colour_contrast/colour.html 2017-11-27.
[^4]: Feber. Febers förstasida. 2017-11-27. http://feber.se/ 2017-11-27.
[^5]: Bonnier. Bonnier förstasida. https://www.bonnier.com/sv/ 2017-11-27.
[^6]: Color Test Result. 1996. http://www.laurenscharff.com/research/survreslts.html 2017-11-27.
[^7]: Internet Movie Database (IMDb). 2017-11-27. http://www.imdb.com/ 2017-11-27.
[^8]: ColorZilla. https://chrome.google.com/webstore/detail/colorzilla/bhlhnicpbhignbdhedgjhgdocnmhomnp 2017-11-02.
[^9]: Wikipedia. 2017-11-18. https://en.wikipedia.org/wiki/Roboto 2017-11-29.
[^10]: WhatFont. https://chrome.google.com/webstore/detail/whatfont/jabopobgcpjmedljpbcaablpmlmfcogm 2017-11-02.
