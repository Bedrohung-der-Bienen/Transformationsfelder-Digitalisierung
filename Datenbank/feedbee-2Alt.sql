-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 30. Mai 2021 um 21:38
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
-- Tabellenstruktur für Tabelle `bewertung`
--

CREATE TABLE `bewertung` (
  `idBewertung` int(11) NOT NULL,
  `Bewertungwert` tinyint(5) DEFAULT NULL,
  `User_idUser` int(11) NOT NULL,
  `Pflanze_idPflanze` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kommentare`
--

CREATE TABLE `kommentare` (
  `idKommentare` int(11) NOT NULL,
  `Kommentartext` varchar(45) DEFAULT '0',
  `Datum` datetime DEFAULT NULL,
  `User_idUser` int(11) NOT NULL,
  `Pflanze_idPflanze` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `merkliste`
--

CREATE TABLE `merkliste` (
  `User_idUser` int(11) NOT NULL,
  `Pflanze_idPflanze` int(11) NOT NULL,
  `Titel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pflanze`
--

CREATE TABLE `pflanze` (
  `idPflanze` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Beschreibung` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `pflanze`
--

INSERT INTO `pflanze` (`idPflanze`, `Name`, `Beschreibung`) VALUES
(1, 'Kamille', 'Beschreibung:\r\nDie Echte Kamille ist eine einj?hrige krautige Pflanze und erreicht Wuchsh?hen von 15 bis 50 cm. Alle Pflanzenteile besitzen einen starken, charakteristischen Geruch. Die St?ngel  sind aufrecht oder aufsteigend und kahl, im oberen Teil sind sie meist sehr stark verzweigt. Urspr?nglich in S?deuropa, im Mittelmeerraum und Kleinasien beheimatet, kommt die Kamille heute in ganz Europa vor.  Wildwachsend sah man die Pflanze fr?her vor allem auf Schuttpl?tzen  sowie an Acker- und Wegr?ndern. Aufgrund ihrer universellen  Heilwirkung wird die Kamille auch gro?fl?chig als Kulturpflanze  angebaut. Leicht verwechseln kann man die Echte Kamille mit den Arten  der Gattung Hundskamille (Anthemis). Diese haben im Gegensatz zur Kamille einen strengen und scharfen Geruch.\r\nEchte Kamille (Matricaria chamomilla) ist nicht nur in der Naturheilkunde sehr beliebt, auch Wildbienen fliegen bis Juli auf den h?bschen Korbbl?tler.\r\n\r\nAnleitung:\r\nSie k?nnen Kamillensamen im Fachhandel kaufen und ab April in Reihen mit 30 bis 40 Zentimeter Abstand auss?en. Da die  winzigen Samen Lichtkeimer sind, d?rfen sie nach der Saat nicht mit Erde  bedeckt werden. Leichtes Andr?cken gen?gt. Alternativ k?nnen Sie die  Saat auch breitw?rfig ausstreuen. Bereiten Sie das Beet mit reichlich Kompost vor und lichten Sie die Pflanzen sp?ter auf mindestens 20 Zentimeter Abstand aus.\r\n\r\nPflege:\r\nEinmal angewachsen ist die Kamille ?u?erst anspruchslos. Nach der Bl?te k?nnen Sie die Pflanzen gegebenenfalls  zur?ckschneiden, um neue Triebe zu f?rdern.'),
(2, 'Zitronenbasilikum', 'Beschreibung:\r\nDas Zitronenbasilikum duftet intensiv nach Zitrone und besitzt ein frisches Aroma. Auch Bienen lieben  dieses Basilikum, da die Bl?ten reichlich Nektar bieten. Die Pflanze mag  sonnige Standorte mit gut durchl?ssiger Erde. Sie wird 20 - 30 cm hoch  und ist einj?hrig.\r\n\r\nDas Zitronenbasilikum hat seine Wurzeln in Indien und anderen tropischen Bereichen Asiens und kommt auch in Afrika in Tansania in der Natur vor. In einigen L?ndern S?damerikas ist es  eingeb?rgert.\r\nDas Zitronenbasilikum hat etwas kleinere Bl?tter als das bekannte Genueser Basilikum. Die Bl?tter sind auch etwas schmaler, mehr zugespitzt und am Rande leicht gez?hnt.\r\nL?sst man die Bl?ten im sp?teren Sommer an den Pflanzen ausreifen und Samen bilden, kann man das Saatgut ernten.\r\n\r\nAnleitung:\r\nBasilikum-Saatgut braucht Licht zur Keimung. Die Samen also nur auf die feuchte Erde streuen und leicht andr?cken.\r\n\r\nPflege:\r\nDas Zitronenbasilikum braucht sehr regelm??ig Gie?wasser, sonst h?ngen die zarten Bl?tter schnell schlaff herunter. Gie?en Sie das  w?rmeliebende Kraut immer mit temperiertem Wasser. Im Sommer werden die  Pflanzen einmal w?chentlich mit einem Gr?npflanzend?nger versorgt. Vor  allem bei regelm??igem Schnitt ist der N?hrstoffnachschub wichtig. Wird das Zitronenbasilikum nicht  regelm??ig beerntet, sollte man darauf achten, dass die Pflanzen nicht  so fr?h zu Bl?hen beginnen.'),
(3, 'Lavendel', 'Beschreibung:\r\nDer Echte Lavendel oder Schmalbl?ttrige Lavendelkurz auch Lavendel genannt, ist eine Pflanzenart aus der Gattung Lavendel (Lavandula) innerhalb der Familie der Lippenbl?ter . Sie findet haupts?chlich Verwendung als Zierpflanze oder zur Gewinnung von Duftstoffen.\r\nEr stammt aus dem Mittelmeergebiet, wo er auf felsigen oder trockenen H?ngen wild w?chst. Benediktinerm?nche brachten den Lavendel im 11. Jahrhundert mit ?ber die Alpen in die Klosterg?rten Nordeuropas. Seither wird die Lavendel-Art als Anti-Mottenmittel, als  Duftkraut sowie als Heilkraut unter anderem gegen Stress, innere Unruhe  und zur Steigerung der Konzentration eingesetzt.\r\n\r\nF?r Bienen ist Echter Lavendel eine wahre Freude. Denn diese Sorte hat besonders viel Nektar.\r\n\r\nAnleitung:\r\nDie feinen Samen des Lavendels k?nnen Sie im M?rz auf der Fensterbank oder im warmen Fr?hbeet in Schalen mit Anzuchterde auss?en. Nach einer Keimdauer von etwa vier Wochen k?nnen Sie die  Jungpflanzen dann im Abstand von 30 x 30 Zentimeter in den Garten  pflanzen. Alternativ werden vorgezogene Pflanzen in T?pfen angeboten.\r\n\r\nPflege:\r\nDer Duftstrauch ist ?u?erst anspruchslos in der Kultur. Halten Sie den Echten Lavendel m?glichst mager. Lavandula angustifolia  gilt in milden (Weinbau-) Regionen als winterhart. In sehr rauen Lagen  im Winter empfiehlt es sich, die Pflanzen mit etwas Reisig oder Mulch  abzudecken.'),
(4, 'Petersilie', 'Beschreibung:\r\nDie Petersilie ist ein beliebtes K?chenkraut und wird gern zum Verfeinern von Fleischgerichten, So?en,  Salaten oder Gem?segerichten verwendet. F?r den optimalen Wuchs ben?tigt  Petersilie ein sonniges bis halbschattiges Pl?tzchen mit sandig bis  lehmigen Boden. Unter den richtigen Bedingungen erfreut sie Hobbyg?rtner  und -koch ?ber zwei Jahre. Im zweiten Jahr entwickelt sich Bl?tenst?ngel, an denen sich gelbe Doldenbl?ten bilden.\r\nDie Petersilie stammt urspr?nglich aus S?dosteuropa.  Von der Blattpetersilie gibt es Sorten mit gekrausten  Bl?ttern, die sich auch zum Garnieren eignen, und solche mit glatten  Bl?ttern. Petersilie enth?lt viele Mineralstoffe wie Eisen und Calcium,  ?therische ?le sowie einen hohen Anteil an den Vitaminen A, B und C.\r\n\r\nAnleitung:\r\nS?en Sie Petersilie ab Ende April direkt ins Freiland, in lockeren, humosen Boden aus.  Ziehen Sie daf?r Saatrillen im Abstand von 20 bis 30 Zentimetern, setzen  Sie die Samen ein bis zwei Zentimeter tief hinein und bedecken Sie sie  mit Erde. Es kann vier Wochen dauern, bis das Kraut keimt.\r\n\r\nPflege:\r\nPetersilie braucht viel Feuchtigkeit, vertr?gt jedoch keine Staun?sse. Das regelm??ige Lockern des Bodens mit der Hacke f?rdert einen erneuten  Austrieb nach der ersten Ernte und ist wichtig, um das Unkraut in Schach  zu halten. Au?er der Kompostgabe bei der Beetvorbereitung braucht das  K?chenkraut keine weitere D?ngung.'),
(5, 'Thymian', 'Beschreibung:\r\n\r\nDer Echte Thymian kann eine H?he von 10 bis 40 Zentimetern erreichen. Ab Mai bis in den Herbst hinein ?ffnet er kleine rosa bis lilafarbene  Bl?ten, welche von Wildbienen gerne als Nahrungsquelle angenommen  werden.\r\n\r\nDer Echte Thymian geh?rt zu den bekanntesten mediterranen K?chenkr?utern. Au?erdem ist die Staude aus  der Familie der Lippenbl?tler eine wertvolle und sehr  vielseitig einsetzbare Heilpflanze.  Das urspr?ngliche Verbreitungsgebiet des Echten Thymians reicht vom  westlichen Mittelmeerraum bis nach S?ditalien ? seit dem Mittelalter ist  er aber auch fester Bestandteil der hiesigen Klosterg?rten und heute aus kaum einem Hausgarten mehr wegzudenken.\r\n\r\nAnleitung:\r\nEchter Thymian wird im Topf angeboten und kann im sp?ten Fr?hjahr ins Beet gepflanzt werden. Halten Sie einen Pflanzabstand von  20 bis 25 Zentimeter ein, auf einen Quadratmeter Fl?che kommen etwa 16  Pflanzen.\r\n\r\nPflege:\r\nAls mediterranes Gew?chs ist Thymus an Trockenheit und karge B?den gew?hnt ? Pflege braucht er kaum. Im Beet kann man alle  paar Jahre etwas Kompost ausbringen. Gie?en ist, vorausgesetzt die Pflanze ist gut angewachsen, eigentlich nur im Topf n?tig. J?hrlich im Fr?hjahr schneidet man beim Thymian die Triebe um etwa ein Drittel zur?ck. So vergreist der  Echte Thymian nicht und treibt Jahr f?r Jahr kr?ftig aus. Auch um einen  Winterschutz m?ssen Sie sich keine Gedanken machen, Thymus vulgaris ist  absolut frosthart. Einzig K?belpflanzen sollten w?hrend des Winters nah  an die Hauswand gestellt werden, da sie winterliche N?sse nicht  besonders gut vertragen.\r\n'),
(6, 'Zitronenmelisse', 'Beschreibung:\r\nDie Zitronenmelisse auch als Honigblume, Herztrost oder  Bienenkraut bekannt, geh?rt zur Familie der Lippenbl?tler (Lamiaceae).  Die Pflanze wird seit ?ber 2000 Jahren als Heilkraut verwendet. Einst  wurde sie als Bienenweide angebaut, daher vermutlich auch der Name  \"melissa\", das griechische Wort f?r \"Honigbiene\". Urspr?nglich war die Pflanze im ?stlichen Mittelmeergebiet heimisch.\r\n\r\nAnleitung:\r\nWenn Sie Zitronenmelisse als Heil- und Gew?rzkraut f?r den Hausgebrauch kultivieren m?chten, reichen ein bis  zwei Pflanzen aus. Im Fachhandel erhalten Sie sie im Fr?hjahr als  Jungpflanzen. Alternativ  k?nnen Sie Zitronenmelisse auch im M?rz oder April unter Glas bei 15  bis 20 Grad Celsius in Kisten oder Schalen selbst auss?en. Decken Sie  die Aussaat nur d?nn mit Erde ab. Nach drei bis vier Wochen erfolgt die Keimung.  Die Jungpflanzen k?nnen dann nach etwa sechs Wochen im Abstand von 30 x  30 Zentimetern ins Freie gesetzt werden.\r\n\r\n\r\nPflege:\r\nJungpflanzen sollten Sie in der Anfangszeit stets feucht halten. Bei guten Haltungsbedingungen beginnt die Zitronenmelisse dann schnell zu  wuchern und breitet sich ganz von selbst aus. Da die Pflanze kr?ftige  Flachwurzeln ausbildet, sollten Sie in ihrem Umfeld nur sehr vorsichtig  hacken. Um einen frischen Austrieb anzuregen, wird die Pflanze beim  beginnenden Knospenansatz beziehungsweise beim ersten Vergilben der  unteren Bl?tter zur?ckgeschnitten. Bei der Kultur im K?bel empfehlen wir, die Zitronenmelisse von April bis August alle zwei bis drei Wochen mit organischem D?nger zu versorgen.'),
(7, 'Rosmarin', 'Der Rosmarin geh?rt zur Familie der Lippenbl?tler (Lamiaceae) und ist ein typisches Mittelmeergew?chs. Vermehrt ist er in den K?stenregionen und besonders oft an Felsenh?ngen im Mittelmeerraum zu finden. Sein lateinischer Name \"rosmarinus\" hei?t ?bersetzt \"Tau des Meeres\". Die Bezeichnung weist wahrscheinlich auf sein h?ufiges Vorkommen an Mittelmeerk?sten hin. Andere vermuten dass der Name an die griechische Bezeichnung \"rhops myrinos\" (\"balsamischer Strauch\") angelehnt ist. Sie weist auf den hohen Gehalt an ?therischen ?len hin. Der botanische Name Rosmarinus officinalis ist wohl den meisten G?rtnern gel?ufig, tats?chlich korrekt ist aber seit 2020 Salvia rosmarinus, da Rosmarin seitdem der Gattung Salbei zugeordnet wird.\r\n\r\nAnleitung:\r\nSchneiden Sie beim Rosmarin Ende M?rz alle Triebe aus dem Vorjahr auf kurze Stummel zur?ck, damit der Strauch sch?n kompakt bleibt. Auf eine D?ngung k?nnen Sie bei Freilandpflanzen komplett verzichten. Topfpflanzen sollten Sie zwei bis drei Mal pro Saison mit etwas niedrig dosiertem Fl?ssigd?nger versorgen.\r\n\r\nPflege: \r\nWenn Sie Rosmarin im Topf halten m?chten, sollten Sie herk?mmliche K?belpflanzenerde oder Kr?utererde mit reichlich Sand oder Tongranulat mischen, da der Halbstrauch humusarme, mineralische Substrate bevorzugt. Und: Der Topf f?r die Kr?uter sollte ?ber ein Abzugsloch verf?gen, sodass das Gie?wasser gut abflie?en kann. Rosmarin ben?tigt zwar regelm??ig, aber nur m??ig Wasser. W?hrend die Pflanze Trockenheit problemlos vertr?gt, ist sie sehr empfindlich gegen?ber Staun?sse. Je ?lter ein Rosmarin ist, desto seltener sollten Sie ihn umtopfen. Achten Sie daher gleich auf einen ausreichend gro?en Topf.\r\n'),
(8, 'Winterheide', 'Beschreibung:\r\nDer Zwergstrauch bevorzugt einen sonnigen Standort mit sandigem, humosem Boden. Lichter Schatten ist auch noch m?glich. Steht die Winterheide an einem schattigen Platz an der Nordseite, sind das Wachstum und die Bl?tenbildung gehemmt. Wichtig ist neben der Sonneneinstrahlung auch ein guter Wasserabzug. B?den, die zu Staun?sse neigen, sind ungeeignet. Bei langanhaltender Trockenheit ist ein W?ssern notwendig. Daher ist ein humoser Standort besser geeignet als ein leichter Sandboden. Ideal ist ein pH-Wert von 4,5 bis 6.\r\n\r\nAnleitung:\r\nIdeal ist eine Pflanzung der Schneeheide im Herbst oder zeitigen Fr?hjahr. Der Boden sollte vor dem Setzen gut gelockert und frei von Wurzelunkr?utern sein. Achten Sie bei schweren B?den auf eine Drainageschicht mit Sand und Kies.\r\n\r\nPflege:\r\nWinterheide ist ein absolut pflegeleichtes Zwerggeh?lz. Nach der Pflanzung und in trockenen Jahren ist als Pflegema?nahme vor allem ein bedarfsorientiertes W?ssern notwendig. Weiter ist ein R?ckschnitt alle 2 bis 3 Jahre empfehlenswert, gerne k?nnen Sie auch jedes Jahr schneiden. Der ideale Zeitpunkt f?r einen R?ckschnitt ist direkt nach der Bl?te. Schneiden Sie etwa die H?lfte des letztj?hrigen Zuwuchses ab. Wichtig ist, dass der R?ckschnitt nicht zu sp?t im Jahr erfolgt, da sonst die bereits gebildeten Bl?tenanlagen abgeschnitten werden. Bei zu starkem R?ckschnitt ist der Neuaustrieb gehemmt. Daher ist es wichtig, dass Sie nicht in das alte Holz schneiden. Durch den R?ckschnitt halten Sie die Winterheide kompakt und bl?hwillig.'),
(9, 'G?nsebl?mchen', 'Beschreibung:\r\nG?nsebl?mchen sind mehrj?hrige, ausdauernd wachsende Pflanzen. Im Winter zieht sich die Pflanze samt Blattgr?n zur?ck, um im darauf folgenden Fr?hjahr erneut auszutreiben. Das G?nsebl?mchen erreicht Wuchsh?hen von maximal 15 cm. Die beigefarbenen bis dunkelbraunen Wurzeln der Pflanze sind meist nicht l?nger als 20 cm. Die Wurzeln des G?nsebl?mchensind von geringer L?nge und faserig-verzweigt - vergleichbar mit den Wurzeln von Feldsalat.\r\n\r\nAnleitung:\r\nAuch wenn G?nsebl?mchen selbstauss?end sind und eigentlich nicht auf ?k?nstliche? Aussaat angewiesen sind, bieten mittlerweile ausgew?hlte Saatguthersteller G?nsebl?mchensamen an. Die Samen werden im Fr?hjahr direkt im Garten oder im Balkonkasten ausges?t. Nach zwei bis drei Wochen treiben die ersten jungen G?nsebl?mchenbl?tter aus.\r\n\r\nPflege:\r\nViel Pflege ben?tigen G?nsebl?mchen nicht. Regelm??iges Gie?en f?rdert das Bl?tenwachstum, d?ngen ist w?hrend der gesamten Bl?hzeit nicht erforderlich. Im Herbst kann die Erde dennoch mit etwas Humus angereichert werden. Da G?nsebl?mchen zu den k?lteresistenten Pflanzen z?hlen, ist auch kein spezieller Frostschutz notwendig.'),
(10, 'Lilie', 'Beschreibung:\r\nLilien sind ausdauernde, krautige Pflanzen mit einer geschuppten Zwiebel als ?berdauerungsorgan. Die fleischigen Schuppen, die einander dachziegelartig ?berdecken, sind, botanisch betrachtet, modifizierte Bl?tter und dienen als N?hrstoffspeicher. Da diese Zwiebel, anders als bei anderen Zwiebelgew?chsen, von keiner sch?tzenden Au?enhaut umgeben ist, wird sie als \"nackt\" bezeichnet. Eine Besonderheit sind die sogenannten Zugwurzeln, die sich am Zwiebelboden entwickeln und die Zwiebel tiefer in die Erde ziehen k?nnen. Au?erdem bilden die meisten Lilien Wurzeln im unterirdischen St?ngelbereich aus ? dort k?nnen auch kleine Tochterzwiebeln entstehen. Die meisten Arten bilden keine grundst?ndigen Bl?tter aus. Diese sind stattdessen zumeist stiellos und wechselst?ndig, stehen oft aber auch in Wirteln am Bl?tenschaft.\r\n\r\nAnleitung:\r\nMan hebt ein 25 bis 30 Zentimeter tiefes Pflanzloch aus. Als Drainage f?llt man eine rund zehn Zentimeter starke Schicht aus grobem Kies ein, darauf kommt eine f?nf bis zehn Zentimeter starke Schicht einer Erdmischung, die aus je einem Drittel Sand, Gartenerde und verrottetem Kompost besteht. Die Zwiebeln setzt man im Abstand von 10 bis 15 Zentimetern auf diese Erdmischung und h?llt sie mit Sand ein. Das Pflanzloch wird dann mit dem bereits beschriebenen Erdgemisch aufgef?llt. Bei schweren oder lehmhaltigen B?den kann es leicht zu stauender N?sse kommen, die Lilienzwiebeln nicht vertragen. Dann empfiehlt sich das Anlegen eines erh?hten Beetes oder die H?gelpflanzung. \r\n\r\nPflege:\r\nDie verbl?hten Stiele werden gleich nach der Bl?te abgeschnitten. So vermeidet man unn?tige Kraftverluste durch Samenbildung. Nur wenn man Samen ernten m?chte, l?sst man diese ausreifen. Der belaubte Teil des Stiels bleibt aber weiter stehen. Erst wenn die Bl?tter absterben, schneidet man den Stiel knapp ?ber der Erde ab. Den verbleibenden Rest mit den St?ngelwurzeln zieht man erst im Fr?hjahr heraus und deckt die Stelle mit humusreicher ged?ngter Erde oder ausgereiftem zweij?hrigem Kompost etwa f?nf Zentimeter hoch ab. Im zeitigen Fr?hjahr noch vor dem Austrieb werden Lilien mit einem organischen oder mineralischen Volld?nger versorgt. Der Stickstoffanteil sollte jedoch nicht zu hoch sein. Daf?r empfiehlt sich ein Fl?ssigd?nger.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `steckbrief`
--

CREATE TABLE `steckbrief` (
  `idSteckbrief` int(11) NOT NULL,
  `Blütezeit` varchar(45) DEFAULT NULL,
  `Aussaat` varchar(45) DEFAULT NULL,
  `Größe` varchar(11) DEFAULT NULL,
  `Blütenform` varchar(45) DEFAULT NULL,
  `Blattfarbe` varchar(45) DEFAULT NULL,
  `Verwendung` varchar(45) DEFAULT NULL,
  `Bodenfeuchte` varchar(45) DEFAULT NULL,
  `Gießvorgang` varchar(45) DEFAULT NULL,
  `Licht` varchar(45) DEFAULT NULL,
  `Erde` varchar(45) DEFAULT NULL,
  `Pflanze_idPflanze` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `steckbrief`
--

INSERT INTO `steckbrief` (`idSteckbrief`, `Blütezeit`, `Aussaat`, `Größe`, `Blütenform`, `Blattfarbe`, `Verwendung`, `Bodenfeuchte`, `Gießvorgang`, `Licht`, `Erde`, `Pflanze_idPflanze`) VALUES
(2, 'ab Juli', 'März - Juli', '20-30 cm', 'etwas schmaler, mehr zugespitzt und am Rande ', 'hell violette Blüten', 'Balkon und Garten', 'feucht', 'regelmäßig', 'sonne', 'durchlässig und feucht', 2),
(3, 'Juni - September', 'März', '60 - 100 cm', 'ährenförmig', 'violett', 'Kräutergärten, Steinanlagen, Rabatten', ' trocken, kalkhaltig', 'alle Paar Tage (selten)', 'Sonne', 'nährstoffreich, durchlässig', 3),
(4, 'Juni - August', 'ab Ende April', '20 - 30 cm', 'gekrausten', 'grün', 'Freiland, in lockeren, humosen Boden', 'viel, keine Staunässe', 'dürftig', 'sonnig bis halbschattig', 'sandig bis  lehmig', 4),
(5, 'Mai- September', 'ab April', '15-50 cm', 'Zungenblätter', 'weiß', 'Garten oder Balkon', 'trocken', 'gelegentlich, nicht häufig', 'Sonne', 'sandige Lehmböden (+Kompost)', 1),
(6, 'Juni - August', 'März-April', '30-90 cm', 'lippenförmig, zweilippig', 'grün', 'Blumenbeete, Pflanzgefäße', 'mäßig trocken bis mäßig feucht', 'Anfangs: stets feucht', 'sonnig - halbschattig', 'sandig bis lehmig', 6),
(7, 'März - April', 'im Frühjahr', '100-200  cm', 'achselständig, lippen-, röhrenförmig', 'grün', 'Pflanzgefäße (Balkon)', 'mäßig trocken bis frisch', 'regelmäßig, aber wenig', 'sonnig', 'steinig bis lehmig', 7),
(8, 'Februar-März (April)', 'im Herbst', '10-30 cm', 'Glocken, Rispen', 'grün', 'Balkon + Garten', 'mäßig trocken bis frisch', 'immer ausreichend', 'sonnig bis halbschattig', 'sandig bis lehmig', 8),
(9, 'Mai - September', 'März-April', '20-30 cm', 'Blütenkörbchen', 'grün', 'Balkon, Terrasse, Garten', 'trocken bis mäßig trocken', 'regelmäßig, aber sparsam', 'sonnig', 'steinig bis sandig', 9),
(10, 'Juni bis August', 'September - März', '30-240 cm', 'Trauben, Trompeten', 'grün', 'Blumenbeet, Einzelstellung, Pflanzgefäß', 'frisch-feucht', 'selten, aber ausgiebig', 'meist sonnig', 'schwer oder lehmhaltig', 10),
(11, 'ab Mai bis Herbst', 'später Frühjahr', '10-40 cm', 'Scheinquirle', 'grün', 'Pflanzgefäße, Rabatten(Balkon)', 'trocken bis mäßig trocken', 'regelmäßig', 'sonnig', 'kiesig bis lehmig', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Benutzername` varchar(45) DEFAULT NULL,
  `Vorname` varchar(45) DEFAULT NULL,
  `Nachname` varchar(45) DEFAULT NULL,
  `Passwort` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`idUser`, `Benutzername`, `Vorname`, `Nachname`, `Passwort`, `Email`) VALUES
(1, 'baba', 'bouchra', 'allachi', '12345', 'baba@hotmail.de'),
(2, NULL, NULL, NULL, 'ugzt', 'allachi_bouchra@hotmail.de'),
(3, NULL, NULL, NULL, 'ugzt', 'allachi_bouchra@hotmail.de'),
(4, 'ballacho', 'Bouchra', 'Allachi', 'ugzt', 'test@test.de'),
(5, 'ballacho', 'Bouchra', 'Allachi', 'ugzt', 'test@test.de'),
(6, 'iji', '', '', 'ugzt', 'test@hotmail.de'),
(7, 'test', 'test', 'test', 'ugzt', 'test@hotmkail.de'),
(8, 'eerdur', 'Ayse', 'Erdur', '123456', 'e@hotmail.de'),
(9, 'balli', 'babak', 'babai', 'ugzt', 'e@hotmail.de'),
(10, 'ttvvt', 'Merve', 'tv', 'oho', 'mervetv@hotmail.de');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bewertung`
--
ALTER TABLE `bewertung`
  ADD PRIMARY KEY (`idBewertung`,`User_idUser`,`Pflanze_idPflanze`),
  ADD KEY `fk_Bewertung_User1_idx` (`User_idUser`),
  ADD KEY `fk_Bewertung_Pflanze1_idx` (`Pflanze_idPflanze`);

--
-- Indizes für die Tabelle `kommentare`
--
ALTER TABLE `kommentare`
  ADD PRIMARY KEY (`idKommentare`,`User_idUser`,`Pflanze_idPflanze`),
  ADD KEY `fk_Kommentare_User1_idx` (`User_idUser`),
  ADD KEY `fk_Kommentare_Pflanze1_idx` (`Pflanze_idPflanze`);

--
-- Indizes für die Tabelle `merkliste`
--
ALTER TABLE `merkliste`
  ADD PRIMARY KEY (`User_idUser`,`Pflanze_idPflanze`),
  ADD KEY `fk_User_has_Pflanze_Pflanze1_idx` (`Pflanze_idPflanze`),
  ADD KEY `fk_User_has_Pflanze_User1_idx` (`User_idUser`);

--
-- Indizes für die Tabelle `pflanze`
--
ALTER TABLE `pflanze`
  ADD PRIMARY KEY (`idPflanze`);

--
-- Indizes für die Tabelle `steckbrief`
--
ALTER TABLE `steckbrief`
  ADD PRIMARY KEY (`idSteckbrief`,`Pflanze_idPflanze`),
  ADD KEY `fk_Steckbrief_Pflanze1_idx` (`Pflanze_idPflanze`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bewertung`
--
ALTER TABLE `bewertung`
  MODIFY `idBewertung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `kommentare`
--
ALTER TABLE `kommentare`
  MODIFY `idKommentare` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `pflanze`
--
ALTER TABLE `pflanze`
  MODIFY `idPflanze` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `steckbrief`
--
ALTER TABLE `steckbrief`
  MODIFY `idSteckbrief` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bewertung`
--
ALTER TABLE `bewertung`
  ADD CONSTRAINT `fk_Bewertung_Pflanze1` FOREIGN KEY (`Pflanze_idPflanze`) REFERENCES `pflanze` (`idPflanze`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Bewertung_User1` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `kommentare`
--
ALTER TABLE `kommentare`
  ADD CONSTRAINT `fk_Kommentare_Pflanze1` FOREIGN KEY (`Pflanze_idPflanze`) REFERENCES `pflanze` (`idPflanze`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Kommentare_User1` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `merkliste`
--
ALTER TABLE `merkliste`
  ADD CONSTRAINT `fk_User_has_Pflanze_Pflanze1` FOREIGN KEY (`Pflanze_idPflanze`) REFERENCES `pflanze` (`idPflanze`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_User_has_Pflanze_User1` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `steckbrief`
--
ALTER TABLE `steckbrief`
  ADD CONSTRAINT `fk_Steckbrief_Pflanze1` FOREIGN KEY (`Pflanze_idPflanze`) REFERENCES `pflanze` (`idPflanze`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
