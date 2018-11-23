#!/bin/bash
for file in *.py; do
	if python "$file"; then
	  exit "$?"
	fi
done
