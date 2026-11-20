# Choisir une image de base avec Caddy
FROM caddy:2.11.7-alpine

# Copier uniquement les fichiers du site
COPY --chown=10001:10001 index.html a-propos.html films.html series.html tendances.html /srv/
COPY --chown=10001:10001 css/ /srv/css/
COPY --chown=10001:10001 js/ /srv/js/

# Exécuter le serveur sans les droits administrateur
USER 10001:10001

# Indiquer le port utilisé
EXPOSE 8000

# Démarrer notre serveur HTTP
CMD ["caddy", "file-server", "--root", "/srv", "--listen", ":8000", "--access-log"]
