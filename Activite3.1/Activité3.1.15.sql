SELECT etage_salle, SUM(nbr_siege) AS sieges
FROM salle
GROUP BY etage_salle ORDER BY nbr_siege;