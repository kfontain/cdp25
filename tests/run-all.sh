#!/bin/bash
for file in *.py; do
	python "$file"
	if [[ $? != 0 ]]
	then
	  exit $?
	fi
done
