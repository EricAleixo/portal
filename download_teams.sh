#!/bin/bash

# Criar diretório se não existir
mkdir -p assets/images/teams

# Array com os times e suas URLs de imagens
declare -A teams=(
    ["botafogo"]="https://s.glbimg.com/es/sde/f/equipes/2018/03/11/botafogo_60x60.png"
    ["palmeiras"]="https://s.glbimg.com/es/sde/f/equipes/2018/03/11/palmeiras_60x60.png"
    ["flamengo"]="https://logodownload.org/wp-content/uploads/2016/09/flamengo-logo-escudo.png"
    ["atletico-mg"]="https://s.glbimg.com/es/sde/f/equipes/2018/03/11/atletico_mg_60x60.png"
    ["sao-paulo"]="https://logodownload.org/wp-content/uploads/2016/09/sao-paulo-logo-escudo.png"
    ["fluminense"]="https://logodownload.org/wp-content/uploads/2016/09/fluminense-logo-escudo.png"
    ["gremio"]="https://s.glbimg.com/es/sde/f/equipes/2018/03/11/gremio_60x60.png"
    ["athletico-pr"]="https://s.glbimg.com/es/sde/f/equipes/2018/03/11/athletico_pr_60x60.png"
    ["cruzeiro"]="https://s.glbimg.com/es/sde/f/equipes/2018/03/11/cruzeiro_60x60.png"
    ["internacional"]="https://s.glbimg.com/es/sde/f/equipes/2018/03/11/internacional_60x60.png"
)

# Baixar cada imagem
for team in "${!teams[@]}"; do
    echo "Baixando logo do $team..."
    curl -L "${teams[$team]}" -o "assets/images/teams/$team.png"
done

echo "Download concluído!" 