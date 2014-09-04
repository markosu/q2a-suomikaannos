q2a-suomikaannos
================

http://www.question2answer.org/ alustan fi käännökset

Käännöksien pohjana käytetty seuraavia lähteitä:

https://gitorious.org/q2a-fi/q2a-fi

https://github.com/koulutuksenpilvivayla/pilvivayla-kysy/tree/devel/qa-lang/fi

## Miten tämä tehtiin?

Tästä alaspäin löydät tietoja siitä miten käännöksien päivittäminen toteutettiin.

1. Kaikki käännöstyö tehdään transifex palvelussa.
   https://www.transifex.com/projects/p/q2a-finnish-suomi-translation/
2. Joka yö vedämme uudet käännökset transifexista väliaikaiseen repositoryyn palvelimelle suorittamalla skriptin (update-files-to-github.sh) crontabia hyväksi käyttäen. 
3. Sieltä samainen skripti puskee gitin avulla muutokset tähän repositoryyn. 

Älä muuta .php tiedostojen sisältöä manuaalisesti, koska ne tulevat transifexista ja korvaavat aina entiset 'as is'. Toisin sanoen manuaaliset muutokset häviävät päivitysprosessissa. 

## Oletukset
Oletuksena on että 

1. sinulla on push oikeus tähän repositoryyn
2. sinulla on SSH avaimet käytössä etkä tarvitse salasanojen syöttöä muutoksien lisäämisessä Githubiin.
3. asennat transifex asiakasohjelman (http://docs.transifex.com/developer/client/)
4. olet asentanut git asiakasohjelman (http://git-scm.com/book/en/Getting-Started-Installing-Git)
5. olet tehnyt .transifexrc tiedoston oman kotihakemistoosi (katso esimerkki alta). 
6. ...

**Esimerkki .transifexrc**

```bash
kyyberi@kyyberi:~/Github/q2a-suomikaannos$ cat /home/kyyberi/.transifexrc 
[https://www.transifex.com]
hostname = https://www.transifex.com
password = omasalasanasi
token = 
username = kyyberi
```
Huom! Token jää tyhjäksi. 

Lisäksi itse repositoryn sisällä on ".tx" kansio, jossa on "config" tiedosto, jossa määritellään muun muassa millä nimillä tiedostot tallennetaan ja minne. 

Sen jälkeen asetat skriptin crontabiin tai voit tietysti manuaalisesti ajaa skriptin tyyliin:
```bash
kyyberi@kyyberi:~/Github/q2a-suomikaannos$ ./update-files-to-github.sh
```
