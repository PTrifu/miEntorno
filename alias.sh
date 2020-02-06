#!/bin/bash
# Script to check the alias output

# vi ~/.bashrc
#añadir lo siguiente al final: de  ~/.bashrc
alias laraa='docker exec --user devuser laravel  php artisan '
alias larac='docker exec --user devuser laravel  composer '
alias larai='docker exec -it --user devuser laravel bash'

# ejecutar
source ~/.bashrc