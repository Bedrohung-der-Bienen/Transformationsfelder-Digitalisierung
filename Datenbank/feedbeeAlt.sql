-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 14. Mai 2021 um 21:37
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `feedbee`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Bewertung`
--

CREATE TABLE `Bewertung` (
  `idBewertung` int(11) NOT NULL,
  `Bewertungwert` tinyint(5) DEFAULT NULL,
  `User_idUser` int(11) NOT NULL,
  `Pflanze_idPflanze` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Kommentare`
--

CREATE TABLE `Kommentare` (
  `idKommentare` int(11) NOT NULL,
  `Kommentartext` varchar(45) DEFAULT '0',
  `Datum` datetime DEFAULT NULL,
  `User_idUser` int(11) NOT NULL,
  `Pflanze_idPflanze` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Merkliste`
--

CREATE TABLE `Merkliste` (
  `User_idUser` int(11) NOT NULL,
  `Pflanze_idPflanze` int(11) NOT NULL,
  `Titel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Pflanze`
--

CREATE TABLE `Pflanze` (
  `idPflanze` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Beschreibung` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `Pflanze`
--

INSERT INTO `Pflanze` (`idPflanze`, `Name`, `Beschreibung`) VALUES
(1, 'Kamille', 'Beschreibung:\r\nDie Echte Kamille ist eine einjährige krautige Pflanze und erreicht Wuchshöhen von 15 bis 50 cm. Alle Pflanzenteile besitzen einen starken, charakteristischen Geruch. Die Stängel  sind aufrecht oder aufsteigend und kahl, im oberen Teil sind sie meist sehr stark verzweigt. Ursprünglich in Südeuropa, im Mittelmeerraum und Kleinasien beheimatet, kommt die Kamille heute in ganz Europa vor.  Wildwachsend sah man die Pflanze früher vor allem auf Schuttplätzen  sowie an Acker- und Wegrändern. Aufgrund ihrer universellen  Heilwirkung wird die Kamille auch großflächig als Kulturpflanze  angebaut. Leicht verwechseln kann man die Echte Kamille mit den Arten  der Gattung Hundskamille (Anthemis). Diese haben im Gegensatz zur Kamille einen strengen und scharfen Geruch.\r\nEchte Kamille (Matricaria chamomilla) ist nicht nur in der Naturheilkunde sehr beliebt, auch Wildbienen fliegen bis Juli auf den hübschen Korbblütler.\r\n\r\nAnleitung:\r\nSie können Kamillensamen im Fachhandel kaufen und ab April in Reihen mit 30 bis 40 Zentimeter Abstand aussäen. Da die  winzigen Samen Lichtkeimer sind, dürfen sie nach der Saat nicht mit Erde  bedeckt werden. Leichtes Andrücken genügt. Alternativ können Sie die  Saat auch breitwürfig ausstreuen. Bereiten Sie das Beet mit reichlich Kompost vor und lichten Sie die Pflanzen später auf mindestens 20 Zentimeter Abstand aus.\r\n\r\nPflege:\r\nEinmal angewachsen ist die Kamille äußerst anspruchslos. Nach der Blüte können Sie die Pflanzen gegebenenfalls  zurückschneiden, um neue Triebe zu fördern.'),
(2, 'Zitronenbasilikum', 'Beschreibung:\r\nDas Zitronenbasilikum duftet intensiv nach Zitrone und besitzt ein frisches Aroma. Auch Bienen lieben  dieses Basilikum, da die Blüten reichlich Nektar bieten. Die Pflanze mag  sonnige Standorte mit gut durchlässiger Erde. Sie wird 20 - 30 cm hoch  und ist einjährig.\r\n\r\nDas Zitronenbasilikum hat seine Wurzeln in Indien und anderen tropischen Bereichen Asiens und kommt auch in Afrika in Tansania in der Natur vor. In einigen Ländern Südamerikas ist es  eingebürgert.\r\nDas Zitronenbasilikum hat etwas kleinere Blätter als das bekannte Genueser Basilikum. Die Blätter sind auch etwas schmaler, mehr zugespitzt und am Rande leicht gezähnt.\r\nLässt man die Blüten im späteren Sommer an den Pflanzen ausreifen und Samen bilden, kann man das Saatgut ernten.\r\n\r\nAnleitung:\r\nBasilikum-Saatgut braucht Licht zur Keimung. Die Samen also nur auf die feuchte Erde streuen und leicht andrücken.\r\n\r\nPflege:\r\nDas Zitronenbasilikum braucht sehr regelmäßig Gießwasser, sonst hängen die zarten Blätter schnell schlaff herunter. Gießen Sie das  wärmeliebende Kraut immer mit temperiertem Wasser. Im Sommer werden die  Pflanzen einmal wöchentlich mit einem Grünpflanzendünger versorgt. Vor  allem bei regelmäßigem Schnitt ist der Nährstoffnachschub wichtig. Wird das Zitronenbasilikum nicht  regelmäßig beerntet, sollte man darauf achten, dass die Pflanzen nicht  so früh zu Blühen beginnen.'),
(3, 'Lavendel', 'Beschreibung:\r\nDer Echte Lavendel oder Schmalblättrige Lavendelkurz auch Lavendel genannt, ist eine Pflanzenart aus der Gattung Lavendel (Lavandula) innerhalb der Familie der Lippenblüter . Sie findet hauptsächlich Verwendung als Zierpflanze oder zur Gewinnung von Duftstoffen.\r\nEr stammt aus dem Mittelmeergebiet, wo er auf felsigen oder trockenen Hängen wild wächst. Benediktinermönche brachten den Lavendel im 11. Jahrhundert mit über die Alpen in die Klostergärten Nordeuropas. Seither wird die Lavendel-Art als Anti-Mottenmittel, als  Duftkraut sowie als Heilkraut unter anderem gegen Stress, innere Unruhe  und zur Steigerung der Konzentration eingesetzt.\r\n\r\nFür Bienen ist Echter Lavendel eine wahre Freude. Denn diese Sorte hat besonders viel Nektar.\r\n\r\nAnleitung:\r\nDie feinen Samen des Lavendels können Sie im März auf der Fensterbank oder im warmen Frühbeet in Schalen mit Anzuchterde aussäen. Nach einer Keimdauer von etwa vier Wochen können Sie die  Jungpflanzen dann im Abstand von 30 x 30 Zentimeter in den Garten  pflanzen. Alternativ werden vorgezogene Pflanzen in Töpfen angeboten.\r\n\r\nPflege:\r\nDer Duftstrauch ist äußerst anspruchslos in der Kultur. Halten Sie den Echten Lavendel möglichst mager. Lavandula angustifolia  gilt in milden (Weinbau-) Regionen als winterhart. In sehr rauen Lagen  im Winter empfiehlt es sich, die Pflanzen mit etwas Reisig oder Mulch  abzudecken.'),
(4, 'Petersilie', 'Beschreibung:\r\nDie Petersilie ist ein beliebtes Küchenkraut und wird gern zum Verfeinern von Fleischgerichten, Soßen,  Salaten oder Gemüsegerichten verwendet. Für den optimalen Wuchs benötigt  Petersilie ein sonniges bis halbschattiges Plätzchen mit sandig bis  lehmigen Boden. Unter den richtigen Bedingungen erfreut sie Hobbygärtner  und -koch über zwei Jahre. Im zweiten Jahr entwickelt sich Blütenstängel, an denen sich gelbe Doldenblüten bilden.\r\nDie Petersilie stammt ursprünglich aus Südosteuropa.  Von der Blattpetersilie gibt es Sorten mit gekrausten  Blättern, die sich auch zum Garnieren eignen, und solche mit glatten  Blättern. Petersilie enthält viele Mineralstoffe wie Eisen und Calcium,  ätherische Öle sowie einen hohen Anteil an den Vitaminen A, B und C.\r\n\r\nAnleitung:\r\nSäen Sie Petersilie ab Ende April direkt ins Freiland, in lockeren, humosen Boden aus.  Ziehen Sie dafür Saatrillen im Abstand von 20 bis 30 Zentimetern, setzen  Sie die Samen ein bis zwei Zentimeter tief hinein und bedecken Sie sie  mit Erde. Es kann vier Wochen dauern, bis das Kraut keimt.\r\n\r\nPflege:\r\nPetersilie braucht viel Feuchtigkeit, verträgt jedoch keine Staunässe. Das regelmäßige Lockern des Bodens mit der Hacke fördert einen erneuten  Austrieb nach der ersten Ernte und ist wichtig, um das Unkraut in Schach  zu halten. Außer der Kompostgabe bei der Beetvorbereitung braucht das  Küchenkraut keine weitere Düngung.'),
(5, 'Thymian', 'Beschreibung:\r\n\r\nDer Echte Thymian kann eine Höhe von 10 bis 40 Zentimetern erreichen. Ab Mai bis in den Herbst hinein öffnet er kleine rosa bis lilafarbene  Blüten, welche von Wildbienen gerne als Nahrungsquelle angenommen  werden.\r\n\r\nDer Echte Thymian gehört zu den bekanntesten mediterranen Küchenkräutern. Außerdem ist die Staude aus  der Familie der Lippenblütler eine wertvolle und sehr  vielseitig einsetzbare Heilpflanze.  Das ursprüngliche Verbreitungsgebiet des Echten Thymians reicht vom  westlichen Mittelmeerraum bis nach Süditalien – seit dem Mittelalter ist  er aber auch fester Bestandteil der hiesigen Klostergärten und heute aus kaum einem Hausgarten mehr wegzudenken.\r\n\r\nAnleitung:\r\nEchter Thymian wird im Topf angeboten und kann im späten Frühjahr ins Beet gepflanzt werden. Halten Sie einen Pflanzabstand von  20 bis 25 Zentimeter ein, auf einen Quadratmeter Fläche kommen etwa 16  Pflanzen.\r\n\r\nPflege:\r\nAls mediterranes Gewächs ist Thymus an Trockenheit und karge Böden gewöhnt – Pflege braucht er kaum. Im Beet kann man alle  paar Jahre etwas Kompost ausbringen. Gießen ist, vorausgesetzt die Pflanze ist gut angewachsen, eigentlich nur im Topf nötig. Jährlich im Frühjahr schneidet man beim Thymian die Triebe um etwa ein Drittel zurück. So vergreist der  Echte Thymian nicht und treibt Jahr für Jahr kräftig aus. Auch um einen  Winterschutz müssen Sie sich keine Gedanken machen, Thymus vulgaris ist  absolut frosthart. Einzig Kübelpflanzen sollten während des Winters nah  an die Hauswand gestellt werden, da sie winterliche Nässe nicht  besonders gut vertragen.\r\n'),
(6, 'Zitronenmelisse', 'Beschreibung:\r\nDie Zitronenmelisse auch als Honigblume, Herztrost oder  Bienenkraut bekannt, gehört zur Familie der Lippenblütler (Lamiaceae).  Die Pflanze wird seit über 2000 Jahren als Heilkraut verwendet. Einst  wurde sie als Bienenweide angebaut, daher vermutlich auch der Name  \"melissa\", das griechische Wort für \"Honigbiene\". Ursprünglich war die Pflanze im östlichen Mittelmeergebiet heimisch.\r\n\r\nAnleitung:\r\nWenn Sie Zitronenmelisse als Heil- und Gewürzkraut für den Hausgebrauch kultivieren möchten, reichen ein bis  zwei Pflanzen aus. Im Fachhandel erhalten Sie sie im Frühjahr als  Jungpflanzen. Alternativ  können Sie Zitronenmelisse auch im März oder April unter Glas bei 15  bis 20 Grad Celsius in Kisten oder Schalen selbst aussäen. Decken Sie  die Aussaat nur dünn mit Erde ab. Nach drei bis vier Wochen erfolgt die Keimung.  Die Jungpflanzen können dann nach etwa sechs Wochen im Abstand von 30 x  30 Zentimetern ins Freie gesetzt werden.\r\n\r\n\r\nPflege:\r\nJungpflanzen sollten Sie in der Anfangszeit stets feucht halten. Bei guten Haltungsbedingungen beginnt die Zitronenmelisse dann schnell zu  wuchern und breitet sich ganz von selbst aus. Da die Pflanze kräftige  Flachwurzeln ausbildet, sollten Sie in ihrem Umfeld nur sehr vorsichtig  hacken. Um einen frischen Austrieb anzuregen, wird die Pflanze beim  beginnenden Knospenansatz beziehungsweise beim ersten Vergilben der  unteren Blätter zurückgeschnitten. Bei der Kultur im Kübel empfehlen wir, die Zitronenmelisse von April bis August alle zwei bis drei Wochen mit organischem Dünger zu versorgen.'),
(7, 'Rosmarin', 'Der Rosmarin gehört zur Familie der Lippenblütler (Lamiaceae) und ist ein typisches Mittelmeergewächs. Vermehrt ist er in den Küstenregionen und besonders oft an Felsenhängen im Mittelmeerraum zu finden. Sein lateinischer Name \"rosmarinus\" heißt übersetzt \"Tau des Meeres\". Die Bezeichnung weist wahrscheinlich auf sein häufiges Vorkommen an Mittelmeerküsten hin. Andere vermuten dass der Name an die griechische Bezeichnung \"rhops myrinos\" (\"balsamischer Strauch\") angelehnt ist. Sie weist auf den hohen Gehalt an ätherischen Ölen hin. Der botanische Name Rosmarinus officinalis ist wohl den meisten Gärtnern geläufig, tatsächlich korrekt ist aber seit 2020 Salvia rosmarinus, da Rosmarin seitdem der Gattung Salbei zugeordnet wird.\r\n\r\nAnleitung:\r\nSchneiden Sie beim Rosmarin Ende März alle Triebe aus dem Vorjahr auf kurze Stummel zurück, damit der Strauch schön kompakt bleibt. Auf eine Düngung können Sie bei Freilandpflanzen komplett verzichten. Topfpflanzen sollten Sie zwei bis drei Mal pro Saison mit etwas niedrig dosiertem Flüssigdünger versorgen.\r\n\r\nPflege: \r\nWenn Sie Rosmarin im Topf halten möchten, sollten Sie herkömmliche Kübelpflanzenerde oder Kräutererde mit reichlich Sand oder Tongranulat mischen, da der Halbstrauch humusarme, mineralische Substrate bevorzugt. Und: Der Topf für die Kräuter sollte über ein Abzugsloch verfügen, sodass das Gießwasser gut abfließen kann. Rosmarin benötigt zwar regelmäßig, aber nur mäßig Wasser. Während die Pflanze Trockenheit problemlos verträgt, ist sie sehr empfindlich gegenüber Staunässe. Je älter ein Rosmarin ist, desto seltener sollten Sie ihn umtopfen. Achten Sie daher gleich auf einen ausreichend großen Topf.\r\n'),
(8, 'Winterheide', 'Beschreibung:\r\nDer Zwergstrauch bevorzugt einen sonnigen Standort mit sandigem, humosem Boden. Lichter Schatten ist auch noch möglich. Steht die Winterheide an einem schattigen Platz an der Nordseite, sind das Wachstum und die Blütenbildung gehemmt. Wichtig ist neben der Sonneneinstrahlung auch ein guter Wasserabzug. Böden, die zu Staunässe neigen, sind ungeeignet. Bei langanhaltender Trockenheit ist ein Wässern notwendig. Daher ist ein humoser Standort besser geeignet als ein leichter Sandboden. Ideal ist ein pH-Wert von 4,5 bis 6.\r\n\r\nAnleitung:\r\nIdeal ist eine Pflanzung der Schneeheide im Herbst oder zeitigen Frühjahr. Der Boden sollte vor dem Setzen gut gelockert und frei von Wurzelunkräutern sein. Achten Sie bei schweren Böden auf eine Drainageschicht mit Sand und Kies.\r\n\r\nPflege:\r\nWinterheide ist ein absolut pflegeleichtes Zwerggehölz. Nach der Pflanzung und in trockenen Jahren ist als Pflegemaßnahme vor allem ein bedarfsorientiertes Wässern notwendig. Weiter ist ein Rückschnitt alle 2 bis 3 Jahre empfehlenswert, gerne können Sie auch jedes Jahr schneiden. Der ideale Zeitpunkt für einen Rückschnitt ist direkt nach der Blüte. Schneiden Sie etwa die Hälfte des letztjährigen Zuwuchses ab. Wichtig ist, dass der Rückschnitt nicht zu spät im Jahr erfolgt, da sonst die bereits gebildeten Blütenanlagen abgeschnitten werden. Bei zu starkem Rückschnitt ist der Neuaustrieb gehemmt. Daher ist es wichtig, dass Sie nicht in das alte Holz schneiden. Durch den Rückschnitt halten Sie die Winterheide kompakt und blühwillig.'),
(9, 'Gänseblümchen', 'Beschreibung:\r\nGänseblümchen sind mehrjährige, ausdauernd wachsende Pflanzen. Im Winter zieht sich die Pflanze samt Blattgrün zurück, um im darauf folgenden Frühjahr erneut auszutreiben. Das Gänseblümchen erreicht Wuchshöhen von maximal 15 cm. Die beigefarbenen bis dunkelbraunen Wurzeln der Pflanze sind meist nicht länger als 20 cm. Die Wurzeln des Gänseblümchensind von geringer Länge und faserig-verzweigt - vergleichbar mit den Wurzeln von Feldsalat.\r\n\r\nAnleitung:\r\nAuch wenn Gänseblümchen selbstaussäend sind und eigentlich nicht auf „künstliche“ Aussaat angewiesen sind, bieten mittlerweile ausgewählte Saatguthersteller Gänseblümchensamen an. Die Samen werden im Frühjahr direkt im Garten oder im Balkonkasten ausgesät. Nach zwei bis drei Wochen treiben die ersten jungen Gänseblümchenblätter aus.\r\n\r\nPflege:\r\nViel Pflege benötigen Gänseblümchen nicht. Regelmäßiges Gießen fördert das Blütenwachstum, düngen ist während der gesamten Blühzeit nicht erforderlich. Im Herbst kann die Erde dennoch mit etwas Humus angereichert werden. Da Gänseblümchen zu den kälteresistenten Pflanzen zählen, ist auch kein spezieller Frostschutz notwendig.'),
(10, 'Lilie', 'Beschreibung:\r\nLilien sind ausdauernde, krautige Pflanzen mit einer geschuppten Zwiebel als Überdauerungsorgan. Die fleischigen Schuppen, die einander dachziegelartig überdecken, sind, botanisch betrachtet, modifizierte Blätter und dienen als Nährstoffspeicher. Da diese Zwiebel, anders als bei anderen Zwiebelgewächsen, von keiner schützenden Außenhaut umgeben ist, wird sie als \"nackt\" bezeichnet. Eine Besonderheit sind die sogenannten Zugwurzeln, die sich am Zwiebelboden entwickeln und die Zwiebel tiefer in die Erde ziehen können. Außerdem bilden die meisten Lilien Wurzeln im unterirdischen Stängelbereich aus – dort können auch kleine Tochterzwiebeln entstehen. Die meisten Arten bilden keine grundständigen Blätter aus. Diese sind stattdessen zumeist stiellos und wechselständig, stehen oft aber auch in Wirteln am Blütenschaft.\r\n\r\nAnleitung:\r\nMan hebt ein 25 bis 30 Zentimeter tiefes Pflanzloch aus. Als Drainage füllt man eine rund zehn Zentimeter starke Schicht aus grobem Kies ein, darauf kommt eine fünf bis zehn Zentimeter starke Schicht einer Erdmischung, die aus je einem Drittel Sand, Gartenerde und verrottetem Kompost besteht. Die Zwiebeln setzt man im Abstand von 10 bis 15 Zentimetern auf diese Erdmischung und hüllt sie mit Sand ein. Das Pflanzloch wird dann mit dem bereits beschriebenen Erdgemisch aufgefüllt. Bei schweren oder lehmhaltigen Böden kann es leicht zu stauender Nässe kommen, die Lilienzwiebeln nicht vertragen. Dann empfiehlt sich das Anlegen eines erhöhten Beetes oder die Hügelpflanzung. \r\n\r\nPflege:\r\nDie verblühten Stiele werden gleich nach der Blüte abgeschnitten. So vermeidet man unnötige Kraftverluste durch Samenbildung. Nur wenn man Samen ernten möchte, lässt man diese ausreifen. Der belaubte Teil des Stiels bleibt aber weiter stehen. Erst wenn die Blätter absterben, schneidet man den Stiel knapp über der Erde ab. Den verbleibenden Rest mit den Stängelwurzeln zieht man erst im Frühjahr heraus und deckt die Stelle mit humusreicher gedüngter Erde oder ausgereiftem zweijährigem Kompost etwa fünf Zentimeter hoch ab. Im zeitigen Frühjahr noch vor dem Austrieb werden Lilien mit einem organischen oder mineralischen Volldünger versorgt. Der Stickstoffanteil sollte jedoch nicht zu hoch sein. Dafür empfiehlt sich ein Flüssigdünger.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Steckbrief`
--

CREATE TABLE `Steckbrief` (
  `idSteckbrief` int(11) NOT NULL,
  `Blütezeit` varchar(45) DEFAULT NULL,
  `Aussaat` varchar(45) DEFAULT NULL,
  `Größe` int(11) DEFAULT NULL,
  `Blütenform` varchar(45) DEFAULT NULL,
  `Blattfarbe` varchar(45) DEFAULT NULL,
  `Verwendung` varchar(45) DEFAULT NULL,
  `Bodenfeuchte` varchar(45) DEFAULT NULL,
  `Gießvorgang` varchar(45) DEFAULT NULL,
  `Licht` varchar(45) DEFAULT NULL,
  `Erde` varchar(45) DEFAULT NULL,
  `Pflanze_idPflanze` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `User`
--

CREATE TABLE `User` (
  `idUser` int(11) NOT NULL,
  `Benutzername` varchar(45) DEFAULT NULL,
  `Vorname` varchar(45) DEFAULT NULL,
  `Nachname` varchar(45) DEFAULT NULL,
  `Passwort` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Bewertung`
--
ALTER TABLE `Bewertung`
  ADD PRIMARY KEY (`idBewertung`,`User_idUser`,`Pflanze_idPflanze`),
  ADD KEY `fk_Bewertung_User1_idx` (`User_idUser`),
  ADD KEY `fk_Bewertung_Pflanze1_idx` (`Pflanze_idPflanze`);

--
-- Indizes für die Tabelle `Kommentare`
--
ALTER TABLE `Kommentare`
  ADD PRIMARY KEY (`idKommentare`,`User_idUser`,`Pflanze_idPflanze`),
  ADD KEY `fk_Kommentare_User1_idx` (`User_idUser`),
  ADD KEY `fk_Kommentare_Pflanze1_idx` (`Pflanze_idPflanze`);

--
-- Indizes für die Tabelle `Merkliste`
--
ALTER TABLE `Merkliste`
  ADD PRIMARY KEY (`User_idUser`,`Pflanze_idPflanze`),
  ADD KEY `fk_User_has_Pflanze_Pflanze1_idx` (`Pflanze_idPflanze`),
  ADD KEY `fk_User_has_Pflanze_User1_idx` (`User_idUser`);

--
-- Indizes für die Tabelle `Pflanze`
--
ALTER TABLE `Pflanze`
  ADD PRIMARY KEY (`idPflanze`);

--
-- Indizes für die Tabelle `Steckbrief`
--
ALTER TABLE `Steckbrief`
  ADD PRIMARY KEY (`idSteckbrief`,`Pflanze_idPflanze`),
  ADD KEY `fk_Steckbrief_Pflanze1_idx` (`Pflanze_idPflanze`);

--
-- Indizes für die Tabelle `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Bewertung`
--
ALTER TABLE `Bewertung`
  MODIFY `idBewertung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `Kommentare`
--
ALTER TABLE `Kommentare`
  MODIFY `idKommentare` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `Pflanze`
--
ALTER TABLE `Pflanze`
  MODIFY `idPflanze` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `Steckbrief`
--
ALTER TABLE `Steckbrief`
  MODIFY `idSteckbrief` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `User`
--
ALTER TABLE `User`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `Bewertung`
--
ALTER TABLE `Bewertung`
  ADD CONSTRAINT `fk_Bewertung_Pflanze1` FOREIGN KEY (`Pflanze_idPflanze`) REFERENCES `Pflanze` (`idPflanze`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Bewertung_User1` FOREIGN KEY (`User_idUser`) REFERENCES `User` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `Kommentare`
--
ALTER TABLE `Kommentare`
  ADD CONSTRAINT `fk_Kommentare_Pflanze1` FOREIGN KEY (`Pflanze_idPflanze`) REFERENCES `Pflanze` (`idPflanze`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Kommentare_User1` FOREIGN KEY (`User_idUser`) REFERENCES `User` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `Merkliste`
--
ALTER TABLE `Merkliste`
  ADD CONSTRAINT `fk_User_has_Pflanze_Pflanze1` FOREIGN KEY (`Pflanze_idPflanze`) REFERENCES `Pflanze` (`idPflanze`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_User_has_Pflanze_User1` FOREIGN KEY (`User_idUser`) REFERENCES `User` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `Steckbrief`
--
ALTER TABLE `Steckbrief`
  ADD CONSTRAINT `fk_Steckbrief_Pflanze1` FOREIGN KEY (`Pflanze_idPflanze`) REFERENCES `Pflanze` (`idPflanze`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
