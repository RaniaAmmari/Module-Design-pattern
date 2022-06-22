SELECT `titre` AS `Titre`, `resum` AS `Resume` , `annee_prod` FROM `film`
WHERE `id_genre` = (SELECT id_genre FROM `genre` WHERE nom = 'exotic') ORDER by annee_prod DESC;