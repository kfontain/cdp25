#!/bin/bash
for file in *.py; do
	if ! python -v "$file"; then
	  exit "$?"
	fi
done
