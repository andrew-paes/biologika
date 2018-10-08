#!/usr/bin/env bash

export DATABASE='biologika'
export CONTAINER="${DATABASE}_db_1"
export USER='user'
export PASSWORD='password'
export EXPORTED_FILE="./db/${CONTAINER}.sql"


# Backup
exportDB(){
 docker exec ${CONTAINER} /usr/bin/mysqldump -u ${USER} --password=${PASSWORD} ${DATABASE} > ${EXPORTED_FILE}
}

# Restore
restoreDB(){
 cat ${EXPORTED_FILE} | docker exec -i ${CONTAINER} /usr/bin/mysql -u ${USER} --password=${PASSWORD} ${DATABASE}
}

# Check if the function exists (bash specific)
if declare -f $1 > /dev/null
then
  # call arguments verbatim
  "$@"
else
  # Show a helpful error
  echo "'$1' is not a known function name" >&2
  exit 1
fi