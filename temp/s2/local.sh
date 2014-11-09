#!/bin/sh

#synct ausschliesslich LOCAL

#sync von allen Dateien vom RECHNER auf den SERVER, aber ohne phpmyadmin (sonst geht die config und die Tabelle verloren)
#auf die Weise kann man deutlich schneller editieren und muss nur bei einem Change dieses Script aufrufen
rsync -vPEcr --progress --partial --stats --exclude 'phpmyadmin' ~/myownphone/ ~/Sites/ 

#config file bekommt andere Rechte, kann sonst nicht gelesen und kopiert werden
#ssh s2 sudo chmod 777 /var/www/html/phpmyadmin/config.inc.php 

#jetzt wird zur Sicherheit ein Backup von phpmyadmin gefahren. Sicher ist sicher.
#rsync -vPEcr --progress --partial --stats s2:/var/www/html/phpmyadmin ~/myownphone/ 

#config file bekommt jetzt seine Rechte zurück, sonst meckert phpmyadmin
#ssh s2 sudo chmod 640 /var/www/html/phpmyadmin/config.inc.php

#falls man phpmyadmin wieder zurück schieben muss, dann die folgende Zeile auskommentieren, gleicher Aufruf wie oben, nur ohne exclude
#rsync -vPEcr --progress --partial --stats  ~/myownphone/ s2:/var/www/html/

#say beep
tput bel
