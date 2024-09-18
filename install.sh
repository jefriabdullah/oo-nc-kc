#!/bin/bash

CADDY_PATH=/opt/caddy
CADDY_FILE=${CADDY_PATH}/Caddyfile
DOMAIN=company.com
NC_FQDN=cloud.${DOMAIN}
SSO_FQDN=sso.${DOMAIN}

mkdir -p ${CADDY_PATH}

if [ -f ${CADDY_FILE} ]; then
  echo "Caddyfile exists"
else
  echo "Caddyfile does not exist, creating..."
  touch ${CADDY_FILE}
  cat << EOF >> ${CADDY_FILE}
{
    email jefri0000@gmail.com 
}
${NC_FQDN} {
    reverse_proxy app:80
}
${SSO_FQDN} {
    reverse_proxy app:80
}

EOF
fi


