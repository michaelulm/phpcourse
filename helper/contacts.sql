--
-- Tabellenstruktur für Tabelle `contacts`
--

CREATE TABLE `contacts` (
  `contactid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `contacts`
--

INSERT INTO `contacts` (`contactid`, `name`, `company`, `city`) VALUES
(1, 'Michael Ulm', 'mea IT Services', 'Bruck/Mur'),
(2, 'Max Mustermann', 'Software Company', 'Graz'),
(3, 'Maria', 'Musterfrau', 'Wien');

--
-- Indizes für die Tabelle `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactid`);

--
-- AUTO_INCREMENT für Tabelle `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;