# Testimonial-Addon - Rezensionen verwalten und ausgeben

Mit diesem Addon können Rezensionen, Kundenstimmen und Bewerungen anhand von YForm und YOrm im Backend verwaltet und im Frontend ausgegeben werden. Auf Wunsch auch multidomainfähig und mehrsprachig.

* Vollständig mit YForm umgesetzt: Alle Features und Anpassungsmöglichkeiten von YForm verfügbar
* Einfach: Die Ausgabe erfolgt über rex_sql oder objektorientiert über YOrm
* Sinnvoll: Nur ausgewählte Rollen/Redakteure haben Zugriff
* Bereit für Multidomain-Newsverwaltung mit YRewrite (+ Addon yform_field)
* Bereit für mehrsprachige Websites: Reiter für Sprachen auf Wunsch anzeigen oder ausblenden (um eigenes Feld erweitern)
* Bereit für viel mehr: Kompatibel zum URL2-Addon

> Tipp: Neues arbeitet hervorragend zusammen mit den Addons yform_usability oder yform_field

Steuere eigene Verbesserungen dem GitHub-Repository von neues bei. Oder unterstütze dieses Addon: Mit einer Beauftragung unterstützt du die Weiterentwicklung dieses AddOns

## Features

Installation
Im REDAXO-Installer das Addon neues herunterladen und installieren. Anschließend erscheint im Hauptmenü ein neuer Menüpunkt "Kundenstimmen".

## Nutzung im Frontend

### Die Klasse `testimonial`

#### Alle Einträge erhalten

```php
use Alexplusde\Testimonial\Entry;
$testimonials = Entry::query()->find(); // YOrm-Standard-Methode zum Finden von Einträgen, lässt sich mit where(), Limit(), etc. einschränken und Filtern.
$testimonials = Entry::findOnline(); // Alle Online-Einträge
```

#### Beispiel-Ausgabe einer Kundenstimme

```php
$testimonial = Entry::get(3); // Kundenstimme mit der ID=3
// dump($testimonial);

echo $testimonial->getAuthor();
echo $testimonial->getDomain();
echo $testimonial->getText();
echo $testimonial->getImage();
echo $testimonial->getStatus();
```

## URL2-Profile

### Kundenstimmen einer Domain

Lege ein passendes URL-Profil auf die Datenbanktabelle an, um Kundenstimmen als einzelne Seiten aufrufbar zu machen. Weitere Informationen dazu im URL-Addon.

## Import

### Import via CSV

Testimonial basiert auf YForm. Importiere deine Einträge bequem per CSV, wie du es von YForm kennst.

## Export

### Export via CSV

Testimonial basiert auf YForm. Exportiere deine Einträge bequem per CSV, wie du es von YForm kennst.

## Autoren

**Alexander Walther**
<http://www.alexplus.de>
<https://github.com/alexplusde>

**Paul Götz**  
<http://www.paulgoetz.de>  
<https://github.com/schorschy>  

### **Projekt-Lead**

**Alexander Walther**
<http://www.alexplus.de>
<https://github.com/alexplusde>

### Addon-Vorlage von / erstellt für

**Alexander Walther**
<http://www.alexplus.de>
<https://github.com/alexplusde>

## Lizenz

MIT Lizenz, siehe [LICENSE.md](https://github.com/alexplusde/testimonial/blob/master/LICENSE.md)  
