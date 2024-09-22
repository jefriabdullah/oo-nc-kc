# oo-nc-kc
OnlyOffice, Nextcloud, Keyclock Docker

```
docker exec -ti --user www-data oo-nc-kc-app-1 /var/www/html/occ db:add-missing-indices
```

https://stackoverflow.com/questions/48400812/sso-with-saml-keycloak-and-nextcloud

https://www.schiessle.org/articles/2023/07/04/nextcloud-and-openid-connect/


docker run \
  - p8080:80 \
  -e GOLLUM_PARAMS="--allow-uploads --show-all" \
  -e CADDY_PARAMS="-conf /gollum/config/Caddyfile" \
  -e HOST="http://*" \
  -e JWT_SECRET="<512 random chars>" \
  -v <folder containing Caddyfile>:/gollum/config \
  -v gollum-vol:/gollum/wiki \
  schnatterer/gollum-galore:0.4.0


  https://garagenum.gitlab.io/doc/divers/devops/sso/sso-nextcloud/

  https://garagenum.gitlab.io/doc/divers/devops/sso/sso-nextcloud/