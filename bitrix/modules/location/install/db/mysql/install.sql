CREATE TABLE IF NOT EXISTS b_location(
	`ID` INT NOT NULL AUTO_INCREMENT,
	`CODE` VARCHAR(100) NOT NULL,
	`EXTERNAL_ID` VARCHAR(255) NULL,
	`SOURCE_CODE` VARCHAR(15) NULL,
	`LATITUDE` DECIMAL(8, 6) NULL,
	`LONGITUDE` DECIMAL(9, 6) NULL,
	`TIMESTAMP_X` TIMESTAMP NOT NULL,
	`TYPE` INT NOT NULL,
	PRIMARY KEY (`ID`),
	UNIQUE INDEX (`CODE`),
	UNIQUE INDEX IX_LOC_SE(`EXTERNAL_ID`, `SOURCE_CODE`),
	INDEX IX_LOC_LAT(`LATITUDE`),
	INDEX IX_LOC_LON(`LONGITUDE`),
	INDEX IX_LOC_T(`TYPE`)
);

CREATE TABLE IF NOT EXISTS b_location_name(
	`LOCATION_ID` INT NOT NULL,
	`LANGUAGE_ID` CHAR(2) NOT NULL,
	`NAME` VARCHAR(1000) NOT NULL,
	`NAME_NORMALIZED` VARCHAR(1000) NOT NULL,
	PRIMARY KEY (`LOCATION_ID`,`LANGUAGE_ID`),
	INDEX IX_LOC_LNN(`NAME_NORMALIZED`(200), `LANGUAGE_ID`)
);

CREATE TABLE IF NOT EXISTS b_location_hierarchy(
	`ANCESTOR_ID` INT NOT NULL,
	`DESCENDANT_ID` INT NOT NULL,
	`LEVEL` INT NOT NULL,
	PRIMARY KEY (`ANCESTOR_ID`, `DESCENDANT_ID`),
	INDEX IX_LOC_LH_D(`DESCENDANT_ID`)
);

CREATE TABLE IF NOT EXISTS b_location_field(
	`LOCATION_ID` INT NOT NULL,
	`TYPE` INT NOT NULL,
	`VALUE` VARCHAR(255) NULL,
	PRIMARY KEY (`LOCATION_ID`, `TYPE`),
	INDEX IDX_BLLFL_VAL(`VALUE`)
);

CREATE TABLE IF NOT EXISTS b_location_address(
	`ID` INT NOT NULL AUTO_INCREMENT,
	`LOCATION_ID` INT DEFAULT 0,
	`LANGUAGE_ID` CHAR(2) NOT NULL,
	`LATITUDE` DECIMAL(8, 6) NULL,
	`LONGITUDE` DECIMAL(9, 6) NULL,
	PRIMARY KEY (`ID`),
	INDEX IX_LOC_BLA_LOC(`LOCATION_ID`)
);

CREATE TABLE IF NOT EXISTS b_location_addr_fld(
	`ADDRESS_ID` INT NOT NULL,
	`TYPE` INT NOT NULL,
	`VALUE` VARCHAR(1024) NULL,
	`VALUE_NORMALIZED` VARCHAR(1024) NULL,
	PRIMARY KEY (`ADDRESS_ID`, `TYPE`),
	INDEX IDX_BLAFL_VAL(`VALUE`),
	INDEX IX_LOC_LNN(`VALUE_NORMALIZED`(200))
);

CREATE TABLE IF NOT EXISTS b_location_addr_link(
	`ADDRESS_ID` INT NOT NULL,
	`ENTITY_ID` VARCHAR(100) NOT NULL,
	`ENTITY_TYPE` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`ADDRESS_ID`, `ENTITY_ID`, `ENTITY_TYPE`),
    INDEX IDX_BLAL_EI_ET(`ENTITY_ID`, `ENTITY_TYPE`)
);

CREATE TABLE IF NOT EXISTS b_location_source(
   `CODE` VARCHAR(15) NOT NULL,
   `NAME` VARCHAR(255) NOT NULL,
   `CONFIG` longtext,
   PRIMARY KEY (`CODE`)
);

CREATE TABLE `b_location_area` (
   `ID` int NOT NULL AUTO_INCREMENT,
   `TYPE` varchar(255) NOT NULL,
   `CODE` varchar(255) DEFAULT NULL,
   `SORT` int NOT NULL,
   `GEOMETRY` longtext,
   PRIMARY KEY (`ID`),
   UNIQUE KEY (TYPE, CODE)
);
