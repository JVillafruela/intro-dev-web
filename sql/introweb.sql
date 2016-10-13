CREATE TABLE `article` (
	`id_article` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`reference` VARCHAR(20) NULL DEFAULT NULL COLLATE 'latin1_general_ci',
	`libelle` VARCHAR(100) NULL DEFAULT NULL COLLATE 'latin1_general_ci',
	`prix` DECIMAL(8,2) NULL DEFAULT NULL,
	INDEX `pk` (`id_article`)
)
COLLATE='latin1_general_ci'
ENGINE=InnoDB
;

INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('202102', 'ALLIANCE 2U OG', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('202103', 'ALLIANCE 2U OG 2 DIAS', 20.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('202101', 'ALLIANCE 2U OJ', 30.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201218', 'ALLIANCE CARRE 2MM, OB & 1 DIA', 40.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201219', 'ALLIANCE CARRE 2MM, OJ & 1 DIA', 50.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201220', 'ALLIANCE CARREE 2 MM OB & 4 DIAS', 60.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201105', 'ALLIANCE CARREE 2 MM OG', 70.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201106', 'ALLIANCE CARREE 2 MM OJ', 80.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201221', 'ALLIANCE CARREE 2 MM OJ & 4 DIAS', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201104', 'ALLIANCE CARREE 2.1 MM OG', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201101', 'ALLIANCE CARREE 2.1 MM OJ', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201222', 'ALLIANCE CARREE 2MM OB & DEMI TOUR DIAS', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201224', 'ALLIANCE CARREE 2MM OB & TOUR DIAS', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201109', 'ALLIANCE CARREE 2MM OG DIAS', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201223', 'ALLIANCE CARREE 2MM OJ & DEMI TOUR DIAS', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201225', 'ALLIANCE CARREE 2MM OJ & TOUR DIAS', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('201108', 'ALLIANCE CARREE 2MM OJ DIAS', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('236105', 'ALLIANCE CARREE 4 MM OB', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('236220', 'ALLIANCE CARREE 4 MM OB & 1 DIA', 10.00);
INSERT INTO `article` (`reference`, `libelle`, `prix`) VALUES ('236106', 'ALLIANCE CARREE 4 MM OJ', 10.00);

        
        
