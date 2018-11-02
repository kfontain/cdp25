INC_DIR = ../

TEX = pdflatex
BIB = bibtex

PDF = main.pdf
TEXFILE = main.tex

all: $(PDF)

$(PDF): $(TEXFILE)
	@$(TEX) $^	#This command is used twice to solve tableofcontents issues

.PHONY: clean

clean:
	rm -rf $(PDF) *.aux *.log *.toc *.out *.fls *.fdb_latexmk *.synctex.gz
	rm -rf *.bbl *.blg
