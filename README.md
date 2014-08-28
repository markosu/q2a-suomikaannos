q2a-suomikaannos
================

http://www.question2answer.org/ alustan fi käännökset

Käännöksien pohjana käytetty seuraavia lähteitä:

https://gitorious.org/q2a-fi/q2a-fi

https://github.com/koulutuksenpilvivayla/pilvivayla-kysy/tree/devel/qa-lang/fi

## Prosessi miten käännökset päivittyvät

1. Kaikki käännöstyö tehdään transifex palvelussa. 
2. Joka yö vedämme uudet käännökset transifexista väliaikaiseen repositoryyn palvelimelle suorittamalla ![skriptin](https://github.com/markosu/q2a-suomikaannos/blob/master/update-files-to-github.sh) crontabia hyväksi käyttäen. 
3. Sieltä samainen skripti puskee gitin avulla muutokset tähän repositoryyn. 
