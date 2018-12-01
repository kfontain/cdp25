#!/bin/bash

DIR="$(dirname "$(which "$0")")"
ERR_LOG=${DIR}/error.log

[[ -f ${ERR_LOG} ]] && rm ${ERR_LOG}

for file in ${DIR}/*.py; do
    now="$(date)"
    printf "%s (%s)\n-----------\n" "$file" "$now" >> ${ERR_LOG}

	if python "$file" 2>> ${ERR_LOG}; then
        result="SUCCESS"
    else
        result="FAIL"
    fi

    printf "%s: %s\n" "$file" "$result"

    printf "\n" >> ${ERR_LOG}
done
