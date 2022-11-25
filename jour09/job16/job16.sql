SELECT salles.nom AS BiggestRoom,etage.nom,MAX(salles.capacite) FROM salles JOIN etage;
BiggestRoom
nom
MAX(salles.capacite)
Lounge
RDC
250

