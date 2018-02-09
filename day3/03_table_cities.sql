--
-- Tabellenstruktur für Tabelle `cities`
--

CREATE TABLE `cities` (
  `cityid` int(11) NOT NULL,
  `cityname` varchar(250) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `population` int(11) NOT NULL,
  `area` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes für die Tabelle `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityid`);

--
-- AUTO_INCREMENT für Tabelle `cities`
--
ALTER TABLE `cities`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT;